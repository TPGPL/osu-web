{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
    See the LICENCE file in the repository root for full licence text.
--}}
@extends('rankings.index')

@php
    $variants = App\Models\Beatmap::VARIANTS[$mode] ?? null;

    if ($variants !== null) {
        array_unshift($variants, 'all');
    }
@endphp

@section('ranking-header')
    <div class="osu-page osu-page--ranking-info">
        <div class="grid-items grid-items--ranking-filter">
            @include('rankings._country_filter')

            @include('rankings._user_filter')

            @if ($variants !== null)
                <div class="js-react--ranking-variant-filter u-contents">
                    <div class="ranking-filter">
                        <div class="ranking-filter__title">
                            {{ osu_trans('rankings.filter.variant.title') }}
                        </div>
                        <div class="sort sort--ranking-header">
                            <div class="sort__items">
                                @foreach ($variants as $v)
                                    <button class="sort__item sort__item--button">
                                        {{ osu_trans("beatmaps.variant.{$mode}.{$v}") }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <script id="json-variant-filter" type="application/json">
                    {!! json_encode([
                        'current' => $variant,
                        'current_ruleset' => $mode,
                        'items' => $variants,
                    ]) !!}
                </script>
            @endif
        </div>
    </div>
@endsection

@section('scores')
    <table class="ranking-page-table">
        <thead>
            <tr>
                <th class="ranking-page-table__heading"></th>
                @if ($showRankChange)
                    <th colspan="2"></th>
                @endif
                <th class="ranking-page-table__heading ranking-page-table__heading--main"></th>
                <th class="ranking-page-table__heading">
                    {{ osu_trans('rankings.stat.accuracy') }}
                </th>
                <th class="ranking-page-table__heading">
                    {{ osu_trans('rankings.stat.play_count') }}
                </th>
                <th class="ranking-page-table__heading ranking-page-table__heading--focused">
                    {{ osu_trans('rankings.stat.performance') }}
                </th>
                <th class="ranking-page-table__heading ranking-page-table__heading--grade">
                    {{ osu_trans('rankings.stat.ss') }}
                </th>
                <th class="ranking-page-table__heading ranking-page-table__heading--grade">
                    {{ osu_trans('rankings.stat.s') }}
                </th>
                <th class="ranking-page-table__heading ranking-page-table__heading--grade">
                    {{ osu_trans('rankings.stat.a') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scores as $index => $score)
                <tr class="ranking-page-table__row{{$score->user->isActive() ? '' : ' ranking-page-table__row--inactive'}}">
                    <td class="ranking-page-table__column ranking-page-table__column--rank">
                        #{{ $scores->firstItem() + $index }}
                    </td>
                    @if ($showRankChange)
                        @php
                            $rankChange = $score->rankHistory?->rankChangeSince30Days();
                            $modifier = 'rank-change-'.match (true) {
                                $rankChange === null => 'pending',
                                $rankChange > 0 => 'down',
                                $rankChange < 0 => 'up',
                                default => 'none',
                            };
                        @endphp
                        <td
                            class="{{ class_with_modifiers('ranking-page-table__column', 'rank-change-icon', $modifier) }}"
                            @if ($rankChange === null)
                                title="{{ osu_trans('rankings.performance.insufficient_history') }}"
                            @endif
                        ></td>
                        <td class="{{ class_with_modifiers('ranking-page-table__column', 'rank-change-value', $modifier) }}">
                            @if ($rankChange)
                                {{ i18n_number_format(abs($rankChange)) }}
                            @endif
                        </td>
                    @endif
                    <td class="ranking-page-table__column">
                        <div class="ranking-page-table__user-link">
                            <span class="ranking-page-table__flags">
                                <a
                                    class="u-contents"
                                    href="{{ route('rankings', [
                                        'mode' => $mode,
                                        'type' => 'performance',
                                        'country' => $score->user->country->acronym,
                                        'variant' => $variant,
                                    ]) }}"
                                >
                                    @include('objects._flag_country', [
                                        'country' => $score->user->country,
                                    ])
                                </a>

                                @if (($team = $score->user->team) !== null)
                                    <a class="u-contents" href="{{ route('teams.show', $team) }}">
                                        @include('objects._flag_team', compact('team'))
                                    </a>
                                @endif
                            </span>
                            <a
                                href="{{ route('users.show', ['user' => $score->user_id, 'mode' => $mode]) }}"
                                class="ranking-page-table__user-link-text js-usercard"
                                data-user-id="{{ $score->user_id }}"
                                data-tooltip-position="right center"
                            >
                                {{ $score->user->username }}
                            </a>
                        </div>
                    </td>
                    <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                        {{ format_percentage($score->accuracy_new / 100) }}
                    </td>
                    <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                        {{ i18n_number_format($score->playcount) }}
                    </td>
                    <td class="ranking-page-table__column ranking-page-table__column--focused">
                        {{ i18n_number_format(round($score->rank_score)) }}
                    </td>
                    <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                        {{ i18n_number_format(max(0, $score->x_rank_count + $score->xh_rank_count)) }}
                    </td>
                    <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                        {{ i18n_number_format(max(0, $score->s_rank_count + $score->sh_rank_count)) }}
                    </td>
                    <td class="ranking-page-table__column ranking-page-table__column--dimmed">
                        {{ i18n_number_format(max(0, $score->a_rank_count)) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
