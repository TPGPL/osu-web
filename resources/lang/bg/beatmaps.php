<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'invalid_ruleset' => 'Невалиден режим на игра зададен.',

    'change_owner' => [
        'too_many' => 'Твърде много гост картографи.',
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Неуспешно актуализиране на гласуването',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'разреши kudosu',
        'beatmap_information' => 'Страница на бийтмап',
        'delete' => 'изтриване',
        'deleted' => 'Изтрито от :editor :delete_time.',
        'deny_kudosu' => 'забрани kudosu',
        'edit' => 'редактиране',
        'edited' => 'Последно редактирано от :editor :update_time.',
        'guest' => 'Трудност, предложена от :user',
        'kudosu_denied' => 'Забранено получаване на kudosu.',
        'message_placeholder_deleted_beatmap' => 'Тази трудност е изтрита, затова вече не може да се обсъжда.',
        'message_placeholder_locked' => 'Изключена е дискусията за този бийтмап.',
        'message_placeholder_silenced' => "Не може да публикувате дискусии, докато сте заглушени.",
        'message_type_select' => 'Избор на вид коментар',
        'reply_notice' => 'Натиснете enter, за да отговорите.',
        'reply_resolve_notice' => 'Натиснете enter за отговор. Натиснете ctrl+enter за отговор и решаване.',
        'reply_placeholder' => 'Въведете вашия отговор тук',
        'require-login' => 'Моля, влезте в профила си, за да публикувате или отговаряте',
        'resolved' => 'Решени',
        'restore' => 'възстанови',
        'show_deleted' => 'Покажи изтрити',
        'title' => 'Дискусии',
        'unresolved_count' => ':count_delimited нерешен проблем|:count_delimited нерешени проблеми',

        'collapse' => [
            'all-collapse' => 'Свий всички',
            'all-expand' => 'Разшири всички',
        ],

        'empty' => [
            'empty' => 'Няма дискусии все още!',
            'hidden' => 'Не е намерена дискусия за избрания критерий.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Заключи дискусията',
                'unlock' => 'Отключи дискусията',
            ],

            'prompt' => [
                'lock' => 'Причина за заключването',
                'unlock' => 'Сигурни ли сте, че искате да отключите дискусията?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Тази публикация ще отиде при общата дискусия. За да редактирате тази трудност, започнете съобщение с времеви етикет (напр. 00:12:345).',
            'in_timeline' => 'При редактиране на няколко времеви етикета, напишете публикация за всеки етикет.',
        ],

        'message_placeholder' => [
            'general' => 'Пишете тук, за публикуване в Обща (:version)',
            'generalAll' => 'Пишете тук, за публикуване в Обща (Всички трудности)',
            'review' => 'Пишете тук, за публикуване на ревю',
            'timeline' => 'Пишете тук, за публикуване във Времева лента (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Дисквалифициране',
            'hype' => 'Надъхване!',
            'mapper_note' => 'Бележка',
            'nomination_reset' => 'Анулиране на номинация',
            'praise' => 'Похвала',
            'problem' => 'Проблем',
            'problem_warning' => 'Докладване за проблем',
            'review' => 'Ревю',
            'suggestion' => 'Предложение',
        ],

        'message_type_title' => [
            'disqualify' => 'Добави дисквалификация',
            'hype' => 'Добави надъхване!',
            'mapper_note' => 'Добави бележка',
            'nomination_reset' => 'Премахни всички номинации',
            'praise' => 'Добави похвала',
            'problem' => 'Добави проблем',
            'problem_warning' => 'Добавяне на проблем',
            'review' => 'Добави ревю',
            'suggestion' => 'Добави предложение',
        ],

        'mode' => [
            'events' => 'История',
            'general' => 'Обща :scope',
            'reviews' => 'Ревюта',
            'timeline' => 'Времева лента',
            'scopes' => [
                'general' => 'Тази трудност',
                'generalAll' => 'Всички трудности',
            ],
        ],

        'new' => [
            'pin' => 'Закачи',
            'timestamp' => 'Времева отметка',
            'timestamp_missing' => 'ctrl-c в редактор и вмъкнете вашето съобщение, за добавяне на времеви етикет!',
            'title' => 'Нова дискусия',
            'unpin' => 'Откачи',
        ],

        'review' => [
            'new' => 'Ново ревю',
            'embed' => [
                'delete' => 'Изтриване',
                'missing' => '[ИЗТРИТА ДИСКУСИЯ]',
                'unlink' => 'Премахни връзка',
                'unsaved' => 'Незапазено',
                'timestamp' => [
                    'all-diff' => 'Публикациите за "Всички трудности" не могат да имат времеви отметки.',
                    'diff' => 'Ако този :type започва с времева отметка, ще бъде показана под времевата лента.',
                ],
            ],
            'insert-block' => [
                'paragraph' => 'добави параграф',
                'praise' => 'добави похвала',
                'problem' => 'добави проблем',
                'suggestion' => 'добави предложение',
            ],
        ],

        'show' => [
            'title' => ':title е създаден от :mapper',
        ],

        'sort' => [
            'created_at' => 'Време на създаване',
            'timeline' => 'Времева лента',
            'updated_at' => 'Последно обновяване',
        ],

        'stats' => [
            'deleted' => 'Изтрито',
            'mapper_notes' => 'Бележки',
            'mine' => 'Мои',
            'pending' => 'Чакащи',
            'praises' => 'Похвали',
            'resolved' => 'Решен',
            'total' => 'Всички',
        ],

        'status-messages' => [
            'approved' => 'Този бийтмап е одобрен на :date!',
            'graveyard' => "Този бийтмап не е актуализиран от :date и затова е в гробището...",
            'loved' => 'Този бийтмап е добавен в обичани на :date!',
            'ranked' => 'Този бийтмап е класиран на :date!',
            'wip' => 'Забележка: Този бийтмап е означен от създателя като "работа в прогрес".',
        ],

        'votes' => [
            'none' => [
                'down' => 'Все още няма отрицателни оценки',
                'up' => 'Все още няма положителни оценки',
            ],
            'latest' => [
                'down' => 'Последни отрицателни оценки',
                'up' => 'Последни положителни оценки',
            ],
        ],
    ],

    'hype' => [
        'button' => 'Надъхване на бийтмап!',
        'button_done' => 'Вече е надъхан!',
        'confirm' => "Сигурни ли сте? Ще бъде използвано едно от вашите :n надъхвания и не може да бъде отменено.",
        'explanation' => 'Надъхай този бийтмап, за увеличаване на шансовете му да бъде номиниран и класиран!',
        'explanation_guest' => 'Влез в профила си и надъхай този бийтмап, за увеличаване на шансовете му да бъде номиниран и класиран!',
        'new_time' => "Ще получите друго надъхване :new_time.",
        'remaining' => 'Имате :remaining надъхвания останали.',
        'required_text' => 'Надъхване: :current/:required',
        'section_title' => 'Надъхващ влак',
        'title' => 'Надъхване',
    ],

    'feedback' => [
        'button' => 'Оставяне на отзив',
    ],

    'nominations' => [
        'already_nominated' => 'Вече сте номинирали този бийтмап.',
        'cannot_nominate' => 'Не може да номинирате този вид игра на бийтмапа.',
        'delete' => 'Изтриване',
        'delete_own_confirm' => 'Сигурни ли сте? Бийтмапът ще бъде изтрит и ще бъдете пренасочени обратно към вашия профил.',
        'delete_other_confirm' => 'Сигурни ли сте? Бийтмапът ще бъде изтрит и ще бъдете пренасочени обратно към профила на потребителя.',
        'disqualification_prompt' => 'Причина за дисквалифициране?',
        'disqualified_at' => 'Дисквалифициран :time_ago (:reason).',
        'disqualified_no_reason' => 'няма определена причина',
        'disqualify' => 'Дисквалифициране',
        'incorrect_state' => 'Грешка при извършване на това действие, опитайте да презаредите страницата.',
        'love' => 'Обич',
        'love_choose' => 'Избери трудност за обичан',
        'love_confirm' => 'Обич за този бийтмап?',
        'nominate' => 'Номиниране',
        'nominate_confirm' => 'Номиниране на този бийтмап?',
        'nominated_by' => 'номиниран от :users',
        'not_enough_hype' => "Няма достатъчно надъхванe.",
        'remove_from_loved' => 'Премахване от обичани',
        'remove_from_loved_prompt' => 'Причина за премахване от обичани:',
        'required_text' => 'Номинации: :current/:required',
        'reset_message_deleted' => 'изтрито',
        'title' => 'Статус на номиниране',
        'unresolved_issues' => 'Все още има нерешени проблеми, те трябва да бъдат проверени първо.',

        'rank_estimate' => [
            '_' => 'Този бийтмап ще бъде класиран на :date ако не открием проблеми. Той е #:position на :queue.',
            'unresolved_problems' => 'Този бийтмап има забрана за напускане на квалификациите преди :problems да бъдат разрешени.',
            'problems' => 'следните проблеми',
            'on' => 'на :date',
            'queue' => 'опашката',
            'soon' => 'скоро',
        ],

        'reset_at' => [
            'nomination_reset' => 'Процесът за номиниране е анулиран :time_ago от :user заради нов проблем :discussion (:message).',
            'disqualify' => 'Дисквалифициран :time_ago от :user заради нов проблем :discussion (:message).',
        ],

        'reset_confirm' => [
            'disqualify' => 'Сигурни ли сте? Това ще премахне бийтмапа от квалификации и ще занули процеса по номиниране.',
            'nomination_reset' => 'Сигурни ли сте? Публикуването на нов проблем ще анулира процесът за номиниране.',
            'problem_warning' => 'Сигурни ли сте за този доклад относно проблем? Това действие ще уведоми номинаторите.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'въведете ключови думи...',
            'login_required' => 'Моля, влез в профила си, за търсене.',
            'options' => 'Повече опции за търсене',
            'supporter_filter' => 'Подреждане по :filters изисква активен osu!supporter',
            'not-found' => 'няма намерени резултати',
            'not-found-quote' => '... не, нищо не е намерено.',
            'filters' => [
                'extra' => 'Екстри',
                'general' => 'Общи',
                'genre' => 'Жанр',
                'language' => 'Език',
                'mode' => 'Игра',
                'nsfw' => 'Explicit съдържание',
                'played' => 'Изигран',
                'rank' => 'Постигнат ранг',
                'status' => 'Категоря',
            ],
            'sorting' => [
                'title' => 'Заглавие',
                'artist' => 'Изпълнител',
                'difficulty' => 'Трудност',
                'favourites' => 'Любими',
                'updated' => 'Обновен',
                'ranked' => 'Класиран',
                'rating' => 'Рейтинг',
                'plays' => 'Изигран',
                'relevance' => 'Уместност',
                'nominations' => 'Номинации',
            ],
            'supporter_filter_quote' => [
                '_' => 'Подреждане по :filters изисква активен :link',
                'link_text' => 'osu!supporter',
            ],
        ],
    ],
    'general' => [
        'converts' => 'Включи конвертирани бийтмапове',
        'featured_artists' => 'Представени автори',
        'follows' => 'Абонирани създатели',
        'recommended' => 'Препоръчана трудност',
        'spotlights' => 'Под прожекторите',
    ],
    'mode' => [
        'all' => 'Всички',
        'any' => 'Всяка',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
        'undefined' => 'не е зададен',
    ],
    'status' => [
        'any' => 'Всяка',
        'approved' => 'Одобрен',
        'favourites' => 'Любими',
        'graveyard' => 'Гробище',
        'leaderboard' => 'Има таблица с класации',
        'loved' => 'Обичан',
        'mine' => 'Мои бийтмапове',
        'pending' => 'Изчаква одобрение или недовършен',
        'wip' => 'В прогрес',
        'qualified' => 'Квалифициран',
        'ranked' => 'Класиран',
    ],
    'genre' => [
        'any' => 'Всеки',
        'unspecified' => 'Неопределен',
        'video-game' => 'Видеоигра',
        'anime' => 'Аниме',
        'rock' => 'Рок',
        'pop' => 'Поп',
        'other' => 'Друг',
        'novelty' => 'Новела',
        'hip-hop' => 'Хип-Хоп',
        'electronic' => 'Електронна',
        'metal' => 'Метъл',
        'classical' => 'Класическа',
        'folk' => 'Фолк',
        'jazz' => 'Джаз',
    ],
    'language' => [
        'any' => 'Всеки',
        'english' => 'Английски',
        'chinese' => 'Китайски',
        'french' => 'Френски',
        'german' => 'Немски',
        'italian' => 'Италиански',
        'japanese' => 'Японски',
        'korean' => 'Корейски',
        'spanish' => 'Испански',
        'swedish' => 'Шведски',
        'russian' => 'Руски',
        'polish' => 'Полски',
        'instrumental' => 'Инструментал',
        'other' => 'Друг',
        'unspecified' => 'Неопределен',
    ],

    'nsfw' => [
        'exclude' => 'Скрито',
        'include' => 'Видимо',
    ],

    'played' => [
        'any' => 'Всички',
        'played' => 'Изигран',
        'unplayed' => 'Неизигран',
    ],
    'extra' => [
        'video' => 'Видео',
        'storyboard' => 'Анимирана история',
    ],
    'rank' => [
        'any' => 'Всички',
        'XH' => 'Сребърен SS',
        'X' => '',
        'SH' => 'Сребърен S',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Изигран: :count',
        'favourites' => 'Любими: :count',
    ],
    'variant' => [
        'mania' => [
            '4k' => '4K',
            '7k' => '7K',
            'all' => 'Всички',
        ],
    ],
];
