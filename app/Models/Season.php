<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read Collection<SeasonDivision> $divisions
 * @property bool $finalised
 * @property string $name
 * @property-read Collection<Multiplayer\Room> $rooms
 * @property int|null $ruleset_id
 * @property float[]|null $score_factors
 * @property string|null $url
 */
class Season extends Model
{
    protected $casts = [
        'finalised' => 'boolean',
        'score_factors' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('finalised', false);
    }

    public static function latestOrId($id)
    {
        if ($id === 'latest') {
            $season = static::last();

            if ($season === null) {
                throw new ModelNotFoundException();
            }
        } else {
            $season = static::findOrFail($id);
        }

        return $season;
    }

    public function divisions(): HasMany
    {
        return $this->hasMany(SeasonDivision::class);
    }

    public function divisionsWithMaxRanks(?int $userCount = null): array
    {
        $divisions = $this->divisions()->orderBy('threshold')->get();
        $userCount ??= $this->userScores()->forRanking()->count();

        $divisionsWithMaxRanks = [];

        foreach ($divisions as $division) {
            $divisionsWithMaxRanks[] = [
                'division' => $division,
                'max_rank' => (int) ($division->threshold * $userCount),
            ];
        }

        return $divisionsWithMaxRanks;
    }

    public function endDate(): ?Carbon
    {
        return $this->finalised
            ? $this->rooms->max('ends_at')
            : null;
    }

    public function startDate(): ?Carbon
    {
        return $this->rooms->min('starts_at');
    }

    public function topScores(): HasMany
    {
        return $this->userScores()->forRanking()->with(['user.country', 'user.team']);
    }

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Multiplayer\Room::class, SeasonRoom::class);
    }

    public function userScores(): HasMany
    {
        return $this->hasMany(UserSeasonScoreAggregate::class);
    }
}
