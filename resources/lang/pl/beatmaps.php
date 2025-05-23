<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'invalid_ruleset' => 'Wybrano nieprawidłowy tryb gry.',

    'change_owner' => [
        'too_many' => 'Zbyt wielu gościnnych twórców beatmap.',
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Nie udało się zaktualizować oceny',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'zezwól na kudosu',
        'beatmap_information' => 'Informacje o beatmapie',
        'delete' => 'usuń',
        'deleted' => 'Usunięte przez :editor :delete_time',
        'deny_kudosu' => 'odrzuć kudosu',
        'edit' => 'edytuj',
        'edited' => 'Ostatnio edytowane przez :editor :update_time',
        'guest' => 'Gościnny poziom trudności autorstwa :user',
        'kudosu_denied' => 'Odmówiono przyznania kudosu.',
        'message_placeholder_deleted_beatmap' => 'Nie możesz zamieszczać dyskusji dla usuniętego poziomu trudności.',
        'message_placeholder_locked' => 'Tworzenie dyskusji dla tej beatmapy zostało wyłączone.',
        'message_placeholder_silenced' => "Nie możesz zamieszczać dyskusji po tym, jak twoje konto zostało uciszone.",
        'message_type_select' => 'Wybierz typ komentarza',
        'reply_notice' => 'Naciśnij Enter, aby odpowiedzieć.',
        'reply_resolve_notice' => 'Naciśnij Enter, aby odpowiedzieć. Naciśnij Ctrl+Enter, aby odpowiedzieć i rozwiązać dyskusję.',
        'reply_placeholder' => 'Napisz tutaj swoją odpowiedź',
        'require-login' => 'Zaloguj się, aby opublikować uwagi',
        'resolved' => 'Rozwiązane',
        'restore' => 'przywróć',
        'show_deleted' => 'Pokaż usunięte',
        'title' => 'Dyskusje',
        'unresolved_count' => ':count_delimited nierozwiązany problem|:count_delimited nierozwiązane problemy|:count_delimited nierozwiązanych problemów',

        'collapse' => [
            'all-collapse' => 'Zwiń wszystkie',
            'all-expand' => 'Rozwiń wszystkie',
        ],

        'empty' => [
            'empty' => 'Brak dyskusji!',
            'hidden' => 'Brak dyskusji spełniających wybrane filtry.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Zablokuj dyskusję',
                'unlock' => 'Odblokuj dyskusję',
            ],

            'prompt' => [
                'lock' => 'Powód zablokowania',
                'unlock' => 'Czy na pewno chcesz odblokować tę dyskusję?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Ten post znajdzie się w ogólnej dyskusji tej beatmapy. Aby zacząć modować ten poziom trudności, zacznij wiadomość od znacznika czasu (np. 00:12:345).',
            'in_timeline' => 'Aby zgłosić uwagi dla kilku różnych znaczników czasu, utwórz dla nich odrębne posty (po jednym dla każdego znacznika czasu).',
        ],

        'message_placeholder' => [
            'general' => 'Pisz tutaj, aby utworzyć post w ogólnej dyskusji (:version)',
            'generalAll' => 'Pisz tutaj, aby utworzyć post w ogólnej dyskusji (wszystkie poziomy trudności)',
            'review' => 'Pisz tutaj, by zamieścić recenzję',
            'timeline' => 'Pisz tutaj, aby utworzyć post dla osi czasu (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Zdyskwalifikuj',
            'hype' => 'Priorytet',
            'mapper_note' => 'Adnotacja',
            'nomination_reset' => 'Zresetuj nominacje',
            'praise' => 'Pochwała',
            'problem' => 'Problem',
            'problem_warning' => 'Zgłoś problem',
            'review' => 'Recenzja',
            'suggestion' => 'Sugestia',
        ],

        'message_type_title' => [
            'disqualify' => 'Zdyskwalifikuj beatmapę',
            'hype' => 'Nagłośnij beatmapę',
            'mapper_note' => 'Opublikuj adnotację',
            'nomination_reset' => 'Usuń wszystkie nominacje',
            'praise' => 'Opublikuj pochwałę',
            'problem' => 'Zgłoś problem',
            'problem_warning' => 'Zgłoś problem',
            'review' => 'Opublikuj recenzję',
            'suggestion' => 'Opublikuj sugestię',
        ],

        'mode' => [
            'events' => 'Historia',
            'general' => 'Ogólne :scope',
            'reviews' => 'Recenzje',
            'timeline' => 'Oś czasu',
            'scopes' => [
                'general' => 'Ten poziom trudności',
                'generalAll' => 'Wszystkie poziomy trudności',
            ],
        ],

        'new' => [
            'pin' => 'Przypnij',
            'timestamp' => 'Znacznik czasu',
            'timestamp_missing' => 'Naciśnij Ctrl+C w edytorze i wklej zawartość, aby dodać znacznik czasu!',
            'title' => 'Nowa dyskusja',
            'unpin' => 'Odepnij',
        ],

        'review' => [
            'new' => 'Nowa recenzja',
            'embed' => [
                'delete' => 'Usuń',
                'missing' => '[DYSKUSJA USUNIĘTA]',
                'unlink' => 'Usuń powiązanie',
                'unsaved' => 'Niezapisana',
                'timestamp' => [
                    'all-diff' => 'Posty dla wszystkich poziomów trudności nie mogą zawierać znaczników czasu.',
                    'diff' => 'Jeżeli ten post rozpoczyna się od znacznika czasu, zostanie on wyświetlony w zakładce osi czasu.',
                ],
            ],
            'insert-block' => [
                'paragraph' => 'wstaw akapit',
                'praise' => 'wstaw pochwałę',
                'problem' => 'wstaw problem',
                'suggestion' => 'wstaw sugestię',
            ],
        ],

        'show' => [
            'title' => ':title autorstwa :mapper',
        ],

        'sort' => [
            'created_at' => 'Data utworzenia',
            'timeline' => 'Oś czasu',
            'updated_at' => 'Ostatnie aktualizacje',
        ],

        'stats' => [
            'deleted' => 'Usunięte',
            'mapper_notes' => 'Adnotacje',
            'mine' => 'Moje',
            'pending' => 'Oczekujące',
            'praises' => 'Pochwały',
            'resolved' => 'Rozwiązane',
            'total' => 'Wszystkie',
        ],

        'status-messages' => [
            'approved' => 'Ta beatmapa została zatwierdzona :date!',
            'graveyard' => "Ta beatmapa nie była aktualizowana od :date i trafiła do kategorii porzuconych...",
            'loved' => 'Ta beatmapa uzyskała status ulubionej społeczności :date!',
            'ranked' => 'Ta beatmapa uzyskała status rankingowy :date!',
            'wip' => 'Ważne: Ta beatmapa została oznaczona przez twórcę jako aktualnie rozwijana.',
        ],

        'votes' => [
            'none' => [
                'down' => 'Brak negatywnych ocen',
                'up' => 'Brak pozytywnych ocen',
            ],
            'latest' => [
                'down' => 'Ostatnie negatywne oceny',
                'up' => 'Ostatnie pozytywne oceny',
            ],
        ],
    ],

    'hype' => [
        'button' => 'Nagłośnij beatmapę!',
        'button_done' => 'Już nagłośniono!',
        'confirm' => "Czy na pewno chcesz to zrobić? Ta czynność jest nieodwracalna i zużyje jedno z twoich :n dostępnych nagłośnień.",
        'explanation' => 'Nagłośnij tę beatmapę, aby stała się bardziej widoczna dla nominatorów i osób modujących!',
        'explanation_guest' => 'Zaloguj się i nagłośnij tę beatmapę, aby stała się bardziej widoczna dla nominatorów i osób modujących!',
        'new_time' => "Nagłośnienie kolejnej beatmapy będzie możliwe za :new_time.",
        'remaining' => 'Możesz nagłośnić jeszcze :remaining beatmap(y).',
        'required_text' => 'Priorytet: :current/:required',
        'section_title' => 'Priorytet',
        'title' => 'Priorytet',
    ],

    'feedback' => [
        'button' => 'Zostaw opinię',
    ],

    'nominations' => [
        'already_nominated' => 'Już nominowano tę beatmapę.',
        'cannot_nominate' => 'Nie możesz nominować beatmapy dla tego trybu gry.',
        'delete' => 'Usuń',
        'delete_own_confirm' => 'Czy na pewno chcesz to zrobić? Ta beatmapa zostanie usunięta i nastąpi przekierowanie do twojego profilu.',
        'delete_other_confirm' => 'Czy na pewno chcesz to zrobić? Ta beatmapa zostanie usunięta i nastąpi przekierowanie do profilu użytkownika.',
        'disqualification_prompt' => 'Powód dyskwalifikacji?',
        'disqualified_at' => 'Zdyskwalifkowane :time_ago (:reason).',
        'disqualified_no_reason' => 'brak określonego powodu',
        'disqualify' => 'Zdyskwalifikuj',
        'incorrect_state' => 'Wystąpił błąd podczas wykonywania tej akcji, spróbuj odświeżyć stronę.',
        'love' => 'Nadaj status ulubionej społeczności',
        'love_choose' => 'Wybierz poziomy trudności, które uzyskają status ulubionych społeczności',
        'love_confirm' => 'Czy chcesz nadać tej beatmapie status ulubionej społeczności?',
        'nominate' => 'Nominuj',
        'nominate_confirm' => 'Czy chcesz nominować tę beatmapę?',
        'nominated_by' => 'nominowana przez :users',
        'not_enough_hype' => "Beatmapa nie jest wystarczająco nagłośniona.",
        'remove_from_loved' => 'Usuń z ulubionych beatmap społeczności',
        'remove_from_loved_prompt' => 'Powód usunięcia z ulubionych beatmap społeczności:',
        'required_text' => 'Nominacje: :current/:required',
        'reset_message_deleted' => 'usunięta',
        'title' => 'Status nominacji',
        'unresolved_issues' => 'Nadal występują nierozwiązane problemy, do których musisz się odnieść.',

        'rank_estimate' => [
            '_' => 'Ta beatmapa uzyska status rankingowy :date, jeżeli nie zostaną zgłoszone żadne problemy. Obecnie jest ona na :position. miejscu w :queue.',
            'unresolved_problems' => ':problems muszą zostać rozwiązane, aby beatmapa mogła uzyskać status rankingowy.',
            'problems' => 'Określone problemy',
            'on' => ':date',
            'queue' => 'kolejce rankingowej',
            'soon' => 'wkrótce',
        ],

        'reset_at' => [
            'nomination_reset' => ':user zresetował(a) proces nominacji :time_ago z powodu nowego problemu :discussion (:message).',
            'disqualify' => ':user zdyskwalifikował(a) beatmapę :time_ago z powodu nowego problemu :discussion (:message).',
        ],

        'reset_confirm' => [
            'disqualify' => 'Czy na pewno chcesz to zrobić? Ta czynność zdyskwalifikuje tę beatmapę i zresetuje proces nominacji.',
            'nomination_reset' => 'Czy na pewno chcesz to zrobić? Zgłoszenie nowego problemu zresetuje proces nominacji.',
            'problem_warning' => 'Czy na pewno chcesz zgłosić problem z tą beatmapą? Powiadomi to nominatorów beatmap.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'wpisz poszukiwaną frazę...',
            'login_required' => 'Zaloguj się, aby wyszukać.',
            'options' => 'Więcej opcji wyszukiwania',
            'supporter_filter' => 'Użycie wybranych filtrów (:filters) wymaga aktywnego statusu donatora osu!',
            'not-found' => 'brak wyników',
            'not-found-quote' => '...niczego nie znaleziono.',
            'filters' => [
                'extra' => 'Dodatkowe',
                'general' => 'Główne',
                'genre' => 'Gatunek',
                'language' => 'Język',
                'mode' => 'Tryb gry',
                'nsfw' => 'Treść dla pełnoletnich',
                'played' => 'Ukończenie',
                'rank' => 'Uzyskana ocena',
                'status' => 'Kategorie',
            ],
            'sorting' => [
                'title' => 'Tytuł',
                'artist' => 'Wykonawca',
                'difficulty' => 'Trudność',
                'favourites' => 'Polubienia',
                'updated' => 'Ostatnie aktualizacje',
                'ranked' => 'Data',
                'rating' => 'Ocena',
                'plays' => 'Liczba zagrań',
                'relevance' => 'Trafność',
                'nominations' => 'Nominacje',
            ],
            'supporter_filter_quote' => [
                '_' => 'Użycie wybranych filtrów (:filters) wymaga :link',
                'link_text' => 'statusu donatora osu!',
            ],
        ],
    ],
    'general' => [
        'converts' => 'Uwzględnij przekonwertowane beatmapy',
        'featured_artists' => 'Wyróżnieni artyści',
        'follows' => 'Obserwowani twórcy',
        'recommended' => 'Polecany poziom trudności',
        'spotlights' => 'Wyróżnione beatmapy',
    ],
    'mode' => [
        'all' => 'Wszyscy',
        'any' => 'Jakikolwiek',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
        'undefined' => 'nie ustawiono',
    ],
    'status' => [
        'any' => 'Jakikolwiek',
        'approved' => 'Zatwierdzone',
        'favourites' => 'Ulubione',
        'graveyard' => 'Porzucone',
        'leaderboard' => 'Z tabelą wyników',
        'loved' => 'Ulubione społeczności',
        'mine' => 'Moje beatmapy',
        'pending' => 'Oczekujące',
        'wip' => 'Obecnie rozwijane',
        'qualified' => 'Zakwalifikowane',
        'ranked' => 'Rankingowe',
    ],
    'genre' => [
        'any' => 'Jakikolwiek',
        'unspecified' => 'Nieokreślony',
        'video-game' => 'Gra wideo',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Inny',
        'novelty' => 'Oryginalny',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Muzyka elektroniczna',
        'metal' => 'Metal',
        'classical' => 'Muzyka klasyczna',
        'folk' => 'Muzyka folkowa',
        'jazz' => 'Jazz',
    ],
    'language' => [
        'any' => 'Jakikolwiek',
        'english' => 'Angielski',
        'chinese' => 'Chiński',
        'french' => 'Francuski',
        'german' => 'Niemiecki',
        'italian' => 'Włoski',
        'japanese' => 'Japoński',
        'korean' => 'Koreański',
        'spanish' => 'Hiszpański',
        'swedish' => 'Szwedzki',
        'russian' => 'Rosyjski',
        'polish' => 'Polski',
        'instrumental' => 'Instrumentalny',
        'other' => 'Inny',
        'unspecified' => 'Nieokreślony',
    ],

    'nsfw' => [
        'exclude' => 'Ukryj',
        'include' => 'Pokaż',
    ],

    'played' => [
        'any' => 'Jakikolwiek',
        'played' => 'Ukończona',
        'unplayed' => 'Nieukończona',
    ],
    'extra' => [
        'video' => 'Posiada wideo',
        'storyboard' => 'Posiada scenorys',
    ],
    'rank' => [
        'any' => 'Jakakolwiek',
        'XH' => 'Srebrne SS',
        'X' => '',
        'SH' => 'Srebrne S',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Liczba zagrań: :count',
        'favourites' => 'Liczba polubień: :count',
    ],
    'variant' => [
        'mania' => [
            '4k' => '4K',
            '7k' => '7K',
            'all' => 'Wszystkie',
        ],
    ],
];
