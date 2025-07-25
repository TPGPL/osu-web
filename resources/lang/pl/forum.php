<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'pinned_topics' => 'Przypięte wątki',
    'slogan' => "samodzielna rozgrywka jest niebezpieczna.",
    'subforums' => 'Podfora',
    'title' => 'Forum',

    'covers' => [
        'edit' => 'Edytuj tło',

        'create' => [
            '_' => 'Ustaw tło',
            'button' => 'Prześlij tło',
            'info' => 'Tło powinno mieć rozdzielczość :dimensions. Możesz także upuścić tutaj swoje tło, aby je dodać.',
        ],

        'destroy' => [
            '_' => 'Usuń tło',
            'confirm' => 'Czy na pewno chcesz usunąć tło?',
        ],
    ],

    'forums' => [
        'forums' => 'Forum',
        'latest_post' => 'Ostatni post',

        'index' => [
            'title' => 'Forum',
        ],

        'topics' => [
            'empty' => 'Brak wątków!',
        ],
    ],

    'mark_as_read' => [
        'forum' => 'Oznacz forum jako przeczytane',
        'forums' => 'Oznacz fora jako przeczytane',
        'busy' => 'Oznaczanie jako przeczytane...',
    ],

    'post' => [
        'confirm_destroy' => 'Czy na pewno chcesz usunąć post?',
        'confirm_restore' => 'Czy na pewno chcesz przywrócić post?',
        'edited' => 'Ostatnio edytowane przez :user :when, łącznie edytowane :count_delimited raz.|Ostatnio edytowane przez :user :when, łącznie edytowane :count_delimited razy.|Ostatnio edytowane przez :user :when, łącznie edytowane :count_delimited razy.',
        'posted_at' => 'opublikowane :when',
        'posted_by_in' => 'opublikowane przez :username na forum :forum',

        'actions' => [
            'destroy' => 'Usuń post',
            'edit' => 'Edytuj post',
            'report' => 'Zgłoś post',
            'restore' => 'Przywróć post',
        ],

        'create' => [
            'title' => [
                'reply' => 'Nowa odpowiedź',
            ],
        ],

        'info' => [
            'post_count' => ':count_delimited post|:count_delimited posty|:count_delimited postów',
            'topic_starter' => 'Autor wątku',
        ],
    ],

    'search' => [
        'go_to_post' => 'Przejdź do posta',
        'post_number_input' => 'wprowadź numer posta',
        'total_posts' => 'łącznie :posts_count postów',
    ],

    'topic' => [
        'confirm_destroy' => 'Czy na pewno chcesz usunąć wątek?',
        'confirm_restore' => 'Czy na pewno chcesz przywrócić wątek?',
        'deleted' => 'usunięty wątek',
        'go_to_latest' => 'pokaż najnowszy post',
        'go_to_unread' => 'pokaż najstarszy nieprzeczytany post',
        'has_replied' => 'Twoja odpowiedź znajduje się w tym wątku',
        'in_forum' => 'forum: :forum',
        'latest_post' => ':when przez :user',
        'latest_reply_by' => 'ostatnia odpowiedź od :user',
        'new_topic' => 'Utwórz nowy wątek',
        'new_topic_login' => 'Zaloguj się, aby utworzyć nowy wątek',
        'post_reply' => 'Opublikuj',
        'reply_box_placeholder' => 'Napisz tutaj swoją odpowiedź',
        'reply_title_prefix' => 'Odp.',
        'started_by' => 'autor: :user',
        'started_by_verbose' => 'utworzony przez :user',

        'actions' => [
            'destroy' => 'Usuń wątek',
            'restore' => 'Przywróć wątek',
        ],

        'create' => [
            'close' => 'Zamknij',
            'preview' => 'Podgląd',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Edytuj',
            'submit' => 'Opublikuj',

            'necropost' => [
                'default' => 'Ten wątek jest nieaktywny od dłuższego czasu. Opublikuj nowy post, tylko jeżeli masz do tego odpowiedni powód.',

                'new_topic' => [
                    '_' => "Ten wątek jest nieaktywny od dłuższego czasu. Jeżeli nie masz odpowiedniego powodu do pisania tutaj, :create.",
                    'create' => 'utwórz nowy wątek',
                ],
            ],

            'placeholder' => [
                'body' => 'Tutaj wpisz zawartość posta',
                'title' => 'Kliknij, aby wprowadzić tytuł',
            ],
        ],

        'jump' => [
            'enter' => 'kliknij, aby przejść do wybranego posta',
            'first' => 'przejdź do pierwszego posta',
            'last' => 'przejdź do ostatniego posta',
            'next' => 'pomiń następne 10 postów',
            'previous' => 'cofnij się o 10 postów',
        ],

        'logs' => [
            '_' => 'Rejestr wątków',
            'button' => 'Przeglądaj rejestr wątków',

            'columns' => [
                'action' => 'Zdarzenie',
                'date' => 'Data',
                'user' => 'Użytkownik',
            ],

            'data' => [
                'add_tag' => 'dodano tag „:tag”',
                'announcement' => 'przypięto wątek i oznaczono jako ogłoszenie',
                'edit_topic' => 'na :title',
                'fork' => 'z :topic',
                'pin' => 'przypięto wątek',
                'post_operation' => 'autor: :username',
                'remove_tag' => 'usunięto tag „:tag”',
                'source_forum_operation' => 'z :forum',
                'unpin' => 'odpięto wątek',
            ],

            'no_results' => 'brak zdarzeń do wyświetlenia...',

            'operations' => [
                'delete_post' => 'Usunięto post',
                'delete_topic' => 'Usunięto wątek',
                'edit_topic' => 'Zmieniono tytuł wątku',
                'edit_poll' => 'Edytowano ankietę w wątku',
                'fork' => 'Skopiowano wątek',
                'issue_tag' => 'Zmieniono tag wątku',
                'lock' => 'Zamknięto wątek',
                'merge' => 'Scalono posty w ten wątek',
                'move' => 'Przeniesiono wątek',
                'pin' => 'Przypięto wątek',
                'post_edited' => 'Edytowano post',
                'restore_post' => 'Przywrócono post',
                'restore_topic' => 'Przywrócono wątek',
                'split_destination' => 'Przeniesiono rozdzielone posty',
                'split_source' => 'Rozdzielono posty',
                'topic_type' => 'Ustawiono typ wątku',
                'topic_type_changed' => 'Zmieniono typ wątku',
                'unlock' => 'Otwarto wątek',
                'unpin' => 'Odpięto wątek',
                'user_lock' => 'Zamknięto własny wątek',
                'user_unlock' => 'Otwarto własny wątek',
            ],
        ],

        'post_edit' => [
            'cancel' => 'Anuluj',
            'post' => 'Zapisz',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title_compact' => 'lista obserwowanych wątków na forum',

            'box' => [
                'total' => 'Zasubskrybowane wątki',
                'unread' => 'Wątki z nowymi odpowiedziami',
            ],

            'info' => [
                'total' => 'Liczba zasubskrybowanych wątków: :total.',
                'unread' => 'Liczba zasubskrybowanych wątków z nowymi odpowiedziami: :unread.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Czy na pewno chcesz przestać subskrybować ten wątek?',
                'title' => 'Przestań subskrybować',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Wątki',

        'actions' => [
            'login_reply' => 'Zaloguj się, aby odpowiedzieć',
            'reply' => 'Odpowiedz',
            'reply_with_quote' => 'Zacytuj we własnej odpowiedzi',
            'search' => 'Wyszukaj',
        ],

        'create' => [
            'create_poll' => 'Tworzenie ankiety',

            'preview' => 'Podgląd wątku',

            'create_poll_button' => [
                'add' => 'Utwórz ankietę',
                'remove' => 'Anuluj tworzenie ankiety',
            ],

            'poll' => [
                'hide_results' => 'Ukryj wyniki tej ankiety.',
                'hide_results_info' => 'Wyniki ankiety zostaną upublicznione po jej zakończeniu.',
                'length' => 'Przeprowadź ankietę przez',
                'length_days_suffix' => 'dni',
                'length_info' => 'Zostaw puste dla niekończącej się ankiety.',
                'max_options' => 'Możliwości wyboru na każdego użytkownika',
                'max_options_info' => 'Liczba możliwości, jakie każdy użytkownik może zaznaczyć.',
                'options' => 'Możliwości wyboru',
                'options_info' => 'Umieść wszystkie możliwości wyboru w oddzielnych liniach. Możesz wprowadzić maksymalnie 10 możliwości.',
                'title' => 'Pytanie',
                'vote_change' => 'Zezwól na zmianę głosów.',
                'vote_change_info' => 'Jeżeli ta opcja zostanie zaznaczona, użytkownicy będą mogli zmieniać swoje głosy.',
            ],
        ],

        'edit_title' => [
            'start' => 'Edytuj tytuł',
        ],

        'index' => [
            'feature_votes' => 'priorytet',
            'replies' => 'odpowiedzi',
            'views' => 'wyświetleń',
        ],

        'issue_tag_added' => [
            'to_0' => 'Usuń tag „dodane”',
            'to_0_done' => 'Usunięto tag „dodane”',
            'to_1' => 'Dodaj tag „dodane”',
            'to_1_done' => 'Dodano tag „dodane”',
        ],

        'issue_tag_assigned' => [
            'to_0' => 'Usuń tag „przypisane”',
            'to_0_done' => 'Usunięto tag „przypisane”',
            'to_1' => 'Dodaj tag „przypisane”',
            'to_1_done' => 'Dodano tag „przypisane”',
        ],

        'issue_tag_confirmed' => [
            'to_0' => 'Usuń tag „potwierdzone”',
            'to_0_done' => 'Usunięto tag „potwierdzone”',
            'to_1' => 'Dodaj tag „potwierdzone”',
            'to_1_done' => 'Dodano tag „potwierdzone”',
        ],

        'issue_tag_duplicate' => [
            'to_0' => 'Usuń tag „duplikat”',
            'to_0_done' => 'Usunięto tag „duplikat”',
            'to_1' => 'Dodaj tag „duplikat”',
            'to_1_done' => 'Dodano tag „duplikat”',
        ],

        'issue_tag_invalid' => [
            'to_0' => 'Usuń tag „nieprawidłowe”',
            'to_0_done' => 'Usunięto tag „nieprawidłowe”',
            'to_1' => 'Dodaj tag „nieprawidłowe”',
            'to_1_done' => 'Dodano tag „nieprawidłowe”',
        ],

        'issue_tag_resolved' => [
            'to_0' => 'Usuń tag „rozwiązane”',
            'to_0_done' => 'Usunięto tag „rozwiązane”',
            'to_1' => 'Dodaj tag „rozwiązane”',
            'to_1_done' => 'Dodano tag „rozwiązane”',
        ],

        'issue_tag_osulazer' => [
            'to_0' => 'Usuń tag „osu!lazer”',
            'to_0_done' => 'Usunięto tag „osu!lazer”',
            'to_1' => 'Dodaj tag „osu!lazer”',
            'to_1_done' => 'Dodano tag „osu!lazer”',
        ],

        'issue_tag_osustable' => [
            'to_0' => 'Usuń tag „osu!stable”',
            'to_0_done' => 'Usunięto tag „osu!stable”',
            'to_1' => 'Dodaj tag „osu!stable”',
            'to_1_done' => 'Dodano tag „osu!stable”',
        ],

        'issue_tag_osuweb' => [
            'to_0' => 'Usuń tag „strona osu!”',
            'to_0_done' => 'Usunięto tag „strona osu!”',
            'to_1' => 'Dodaj tag „strona osu!”',
            'to_1_done' => 'Dodano tag „strona osu!”',
        ],

        'lock' => [
            'is_locked' => 'Ten wątek został zamknięty i nie możesz w nim odpowiadać',
            'to_0' => 'Otwórz wątek',
            'to_0_confirm' => 'Czy na pewno chcesz otworzyć wątek?',
            'to_0_done' => 'Wątek został otworzony',
            'to_1' => 'Zamknij wątek',
            'to_1_confirm' => 'Czy na pewno chcesz zamknąć wątek?',
            'to_1_done' => 'Wątek został zamknięty',
        ],

        'moderate_move' => [
            'title' => 'Przenieś do innego forum',
        ],

        'moderate_pin' => [
            'to_0' => 'Odepnij wątek',
            'to_0_confirm' => 'Czy na pewno chcesz odpiąć wątek?',
            'to_0_done' => 'Wątek został odpięty',
            'to_1' => 'Przypnij wątek',
            'to_1_confirm' => 'Czy na pewno chcesz przypiąć wątek?',
            'to_1_done' => 'Wątek został przypięty',
            'to_2' => 'Przypnij wątek i oznacz jako ogłoszenie',
            'to_2_confirm' => 'Czy na pewno chcesz przypiąć wątek i oznaczyć go jako ogłoszenie?',
            'to_2_done' => 'Wątek został przypięty i oznaczony jako ogłoszenie',
        ],

        'moderate_toggle_deleted' => [
            'show' => 'Pokaż usunięte posty',
            'hide' => 'Ukryj usunięte posty',
        ],

        'show' => [
            'deleted-posts' => 'Usunięte posty',
            'total_posts' => 'Wszystkie posty',

            'feature_vote' => [
                'current' => 'Priorytet: +:count',
                'do' => 'Nagłośnij tę prośbę',

                'info' => [
                    '_' => 'Ten wątek jest :feature_request - mogą na nie głosować wyłącznie :supporters.',
                    'feature_request' => 'prośbą o nową funkcjonalność',
                    'supporters' => 'donatorzy osu!',
                ],

                'user' => [
                    'count' => '{0} 0 głosów|{1} :count_delimited głos|[2,4] :count_delimited głosy|{5,*} :count_delimited głosów',
                    'current' => 'Pozostało ci :votes.',
                    'not_enough' => "Nie posiadasz żadnych głosów",
                ],
            ],

            'poll' => [
                'edit' => 'Edytowanie ankiety',
                'edit_warning' => 'Wprowadzenie zmian do ankiety spowoduje usunięcie obecnych wyników!',
                'vote' => 'Zagłosuj',

                'button' => [
                    'change_vote' => 'Zmień głos',
                    'edit' => 'Edytuj ankietę',
                    'view_results' => 'Przejdź do wyników',
                    'vote' => 'Zagłosuj',
                ],

                'detail' => [
                    'end_time' => 'Ankieta zakończy się :time',
                    'ended' => 'Ankieta zakończyła się :time',
                    'results_hidden' => 'Wyniki ankiety zostaną upublicznione po jej zakończeniu.',
                    'total' => 'Liczba wszystkich głosów: :count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => 'Nie subskrybuj',
            'to_watching' => 'Subskrybuj',
            'to_watching_mail' => 'Subskrybuj z powiadomieniami',
            'tooltip_mail_disable' => 'Powiadomienia są włączone. Kliknij tutaj, aby je wyłączyć.',
            'tooltip_mail_enable' => 'Powiadomienia są wyłączone. Kliknij tutaj, aby je włączyć.',
        ],
    ],
];
