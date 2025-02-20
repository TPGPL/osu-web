<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Models;

use App\Libraries\BBCodeForDB;
use App\Libraries\Uploader;
use App\Libraries\UsernameValidation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    const FLAG_MAX_DIMENSIONS = [512, 256];
    const HEADER_MAX_DIMENSIONS = [2000, 500];

    const MAX_FIELD_LENGTHS = [
        'name' => 100,
        'short_name' => 4,
        'url' => 255,
    ];

    protected $casts = ['is_open' => 'bool'];

    private Uploader $header;
    private Uploader $flag;

    private static function sanitiseName(?string $value): ?string
    {
        return presence(preg_replace('/  +/', ' ', trim($value ?? '')));
    }

    public function applications(): HasMany
    {
        return $this->hasMany(TeamApplication::class);
    }

    public function leader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function members(): HasMany
    {
        return $this->hasMany(TeamMember::class);
    }

    public function setDefaultRulesetIdAttribute(?int $value): void
    {
        $this->attributes['default_ruleset_id'] = Beatmap::MODES[Beatmap::modeStr($value) ?? 'osu'];
    }

    public function setFlagAttribute(?string $value): void
    {
        $this->flag()->set($value);
    }

    public function setHeaderAttribute(?string $value): void
    {
        $this->header()->set($value);
    }

    public function setNameAttribute(?string $value): void
    {
        $this->attributes['name'] = static::sanitiseName($value);
    }

    public function setShortNameAttribute(?string $value): void
    {
        $this->attributes['short_name'] = static::sanitiseName($value);
    }

    public function setUrlAttribute(?string $value): void
    {
        $this->attributes['url'] = $value === null
            ? null
            : (is_http($value)
                ? $value
                : "https://{$value}"
            );
    }

    public function descriptionHtml(): string
    {
        $description = presence($this->description);

        return $description === null
            ? ''
            : bbcode((new BBCodeForDB($description))->generate());
    }

    public function delete()
    {
        $this->header()->delete();
        $this->flag()->delete();

        return $this->getConnection()->transaction(function () {
            $ret = parent::delete();

            if ($ret) {
                $this->applications()->delete();
                $this->members()->delete();
            }

            return $ret;
        });
    }

    public function emptySlots(): int
    {
        $max = $this->maxMembers();
        $current = $this->members->count();

        return max(0, $max - $current);
    }

    public function header(): Uploader
    {
        return $this->header ??= new Uploader(
            'teams/header',
            $this,
            'header_file',
            ['image' => ['maxDimensions' => static::HEADER_MAX_DIMENSIONS]],
        );
    }

    public function isValid(): bool
    {
        $this->validationErrors()->reset();

        $wordFilters = app('chat-filters');
        foreach (['name', 'short_name'] as $field) {
            $value = $this->$field;
            if ($value === null) {
                $this->validationErrors()->add($field, 'required');
            } elseif ($this->isDirty($field)) {
                // printable ascii characters
                if (!preg_match('/^[ -~]+$/', $value)) {
                    $this->validationErrors()->add($field, '.invalid_characters');
                } elseif (!$wordFilters->isClean($value) || !UsernameValidation::allowedName($value)) {
                    $this->validationErrors()->add($field, '.word_not_allowed');
                } elseif (static::whereNot('id', $this->getKey())->where($field, $value)->exists()) {
                    $this->validationErrors()->add($field, '.used');
                }
            }
        }

        $this->validateDbFieldLengths();

        if ($this->isDirty('url')) {
            $url = $this->url;
            if ($url !== null && !is_http($url)) {
                $this->validationErrors()->add('url', 'url');
            }
        }

        if ($this->isDirty('ruleset_id')) {
            if (Beatmap::modeStr($this->ruleset_id) === null) {
                $this->validationErrors()->add('ruleset_id', '.unknown_ruleset_id');
            }
        }

        return $this->validationErrors()->isEmpty();
    }

    public function flag(): Uploader
    {
        return $this->flag ??= new Uploader(
            'teams/flag',
            $this,
            'flag_file',
            ['image' => ['maxDimensions' => static::FLAG_MAX_DIMENSIONS]],
        );
    }

    public function maxMembers(): int
    {
        $this->loadMissing('members.user');

        $supporterCount = $this->members->filter(fn ($member) => $member->user?->isSupporter() ?? false)->count();

        return min(8 + (4 * $supporterCount), $GLOBALS['cfg']['osu']['team']['max_members']);
    }

    public function save(array $options = [])
    {
        if (!$this->isValid()) {
            return false;
        }

        $this->flag()->updateFile();
        $this->header()->updateFile();

        return parent::save($options);
    }

    public function validationErrorsTranslationPrefix(): string
    {
        return 'team';
    }
}
