<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace Tests\Controllers;

use App\Models\Beatmap;
use App\Models\Beatmapset;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class BeatmapsControllerTest extends TestCase
{
    private $user;
    private $beatmap;

    /**
     * @group RequiresBeatmapDifficultyLookupCache
     */
    public function testAttributes(): void
    {
        $beatmap = $this->createExistingOsuBeatmap();

        $this->actAsScopedUser(User::factory()->create(), ['public']);

        $this->post(route('api.beatmaps.attributes', ['beatmap' => $beatmap->getKey()]), [
            'mods' => 1,
        ])
            ->assertSuccessful()
            ->assertJson(fn (AssertableJson $json) =>
                $json
                    ->has('attributes.star_rating')
                    ->has('attributes.max_combo')
                    ->etc());
    }

    public function testAttributesInvalidRuleset(): void
    {
        $beatmap = $this->createExistingOsuBeatmap();

        $this->actAsScopedUser(User::factory()->create(), ['public']);

        $this->post(route('api.beatmaps.attributes', ['beatmap' => $beatmap->getKey(), 'ruleset' => 'invalid']))
            ->assertStatus(422);
    }

    public function testAttributesInvalidRulesetId(): void
    {
        $beatmap = $this->createExistingOsuBeatmap();

        $this->actAsScopedUser(User::factory()->create(), ['public']);

        $this->post(route('api.beatmaps.attributes', ['beatmap' => $beatmap->getKey(), 'ruleset_id' => 1000]))
            ->assertStatus(422);
    }

    public function testAttributesInvalidConversion(): void
    {
        $beatmap = $this->createExistingFruitsBeatmap();

        $this->actAsScopedUser(User::factory()->create(), ['public']);

        $this->post(route('api.beatmaps.attributes', ['beatmap' => $beatmap->getKey(), 'ruleset' => 'mania']))
            ->assertStatus(422);
    }

    public function testIndexForApi(): void
    {
        $beatmap = Beatmap::factory()->create();
        $beatmapB = Beatmap::factory()->create();
        $beatmapC = Beatmap::factory()->create();
        $beatmapC->beatmapset->update(['active' => false]);

        $this->actAsScopedUser(User::factory()->create(), ['*']);

        $this
            ->get(route('api.beatmaps.index', ['ids' => [$beatmap->getKey(), $beatmapB->getKey(), $beatmapC->getKey()]]))
            ->assertSuccessful()
            ->assertJson(fn (AssertableJson $json) =>
                $json
                    ->where('beatmaps.0.id', $beatmap->getKey())
                    ->where('beatmaps.1.id', $beatmapB->getKey())
                    ->missing('beatmaps.2')
                    ->etc());
    }

    public function testIndexForApiMissingParameter(): void
    {
        $this->actAsScopedUser(User::factory()->create(), ['*']);

        $this
            ->get(route('api.beatmaps.index'))
            ->assertSuccessful();
    }

    public function testInvalidMode()
    {
        $this->json('GET', route('beatmaps.scores', $this->beatmap), [
            'mode' => 'nope',
        ])->assertStatus(422);
    }

    /**
     * @dataProvider dataProviderForTestLookupForApi
     */
    public function testLookupForApi(string $key, callable $valueFn): void
    {
        $beatmap = Beatmap::factory()->create();

        $this->actAsScopedUser(User::factory()->create(), ['*']);

        $this
            ->get(route('api.beatmaps.lookup', [$key => $valueFn($beatmap)]))
            ->assertSuccessful()
            ->assertJsonPath('id', $beatmap->getKey());
    }

    /**
     * Make sure the lookup stops when finding beatmap from one of the parameters
     */
    public function testLookupMultipleParamsForApi(): void
    {
        $beatmap = Beatmap::factory()->create();

        $this->actAsScopedUser(User::factory()->create(), ['*']);

        $this
            ->get(route('api.beatmaps.lookup', [
                'checksum' => '',
                'id' => (string) $beatmap->getKey(),
                'filename' => '',
            ]))
            ->assertSuccessful()
            ->assertJsonPath('id', $beatmap->getKey());
    }

    /**
     * Checks whether HTTP 403 is thrown when a logged out
     * user tries to access the non-general (country or friend ranking)
     * scoreboards.
     */
    public function testScoresNonGeneralLoggedOut()
    {
        $this->json('GET', route('beatmaps.scores', $this->beatmap), [
            'type' => 'country',
        ])->assertStatus(422)
        ->assertJson(['error' => osu_trans('errors.supporter_only')]);
    }

    /**
     * Checks whether an error is thrown when an user without supporter
     * tries to access supporter-only scoreboards.
     */
    public function testScoresNonGeneralSupporter()
    {
        $this->actingAs($this->user)
            ->json('GET', route('beatmaps.scores', $this->beatmap), [
                'type' => 'country',
            ])->assertStatus(422)
            ->assertJson(['error' => osu_trans('errors.supporter_only')]);

        $this->user->osu_subscriber = true;
        $this->user->save();

        $this->actingAs($this->user)
            ->json('GET', route('beatmaps.scores', $this->beatmap), [
                'type' => 'country',
            ])->assertStatus(200);
    }

    public function testShowForApi()
    {
        $beatmap = Beatmap::factory()->create();

        $this->actAsScopedUser(User::factory()->create(), ['*']);

        $this
            ->get(route('api.beatmaps.show', ['beatmap' => $beatmap->getKey()]))
            ->assertSuccessful()
            ->assertJsonPath('id', $beatmap->getKey());
    }

    public static function dataProviderForTestLookupForApi(): array
    {
        return [
            'checksum' => ['checksum', fn (Beatmap $b) => $b->checksum],
            'filename' => ['filename', fn (Beatmap $b) => $b->filename],
            'id' => ['id', fn (Beatmap $b) => $b->getKey()],
        ];
    }

    public static function dataProviderForTestUpdateOwnerLoved(): array
    {
        return [
            [Beatmapset::STATES['graveyard'], true],
            [Beatmapset::STATES['loved'], true],
            [Beatmapset::STATES['ranked'], false],
            [Beatmapset::STATES['wip'], false],
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->beatmap = Beatmap::factory()->qualified()->create();
    }

    private function createExistingFruitsBeatmap()
    {
        return Beatmap::factory()->create([
            'beatmap_id' => 2177697,
            'beatmapset_id' => Beatmapset::factory(['beatmapset_id' => 918591]),
            'playmode' => Beatmap::MODES['fruits'],
        ]);
    }

    private function createExistingOsuBeatmap()
    {
        return Beatmap::factory()->create([
            'beatmap_id' => 567606,
            'beatmapset_id' => Beatmapset::factory(['beatmapset_id' => 246416]),
        ]);
    }
}
