<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'play_more' => 'چطوره که یکم osu! بازی کنید؟',
    'require_login' => 'لطفا برای ادامه وارد شوید.',
    'require_verification' => 'لطفا برای ادامه تایید هویت کنید.',
    'restricted' => "نمیتوانید آن را موقعی که محدود شده اید انجام دهید.",
    'silenced' => "نمیتوانید آن را موقعی که ساکت شده اید انجام دهید.",
    'unauthorized' => 'دسترسی امکان‌پذیر نیست.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'نمیتوانید hype را بازانجام دهید.',
            'has_reply' => 'نمیتوانید گفت و گویی که پاسخ دارد را حذف کنید',
        ],
        'nominate' => [
            'exhausted' => 'شما به بیشترین مقدار nominations امروزتان رسیده اید. لطفا دوباره فردا تلاش کنید.',
            'incorrect_state' => 'در انجام آن کار خطایی صورت گرفت، بارگزاری مجدد صفحه را امتحان کنید.',
            'owner' => "نمیتوانید بیت مپ خودتان را نامزد کنید.",
            'set_metadata' => 'شما باید ژانر و زبان را قبل nominate کردن مشخص کنید.',
        ],
        'resolve' => [
            'not_owner' => 'فقط شروع کننده بحث و صاحب بیت مپ میتوانند یک بحث را حل کنند.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'فقط صاحب بیت مپ یا نامزد کننده یا اعضای گروه NAT میتوانند پیام از طرف سازنده مپ ثبت کنند.',
        ],

        'vote' => [
            'bot' => "نمیتوان به گفت و گوی ایجاد شده توسط بات رای داد",
            'limit_exceeded' => 'لطفا اندکی قبل از ارسال رای های بیشتر صبر کنید',
            'owner' => "نمیتوانید به گفت و گوی خودتان رای دهید.",
            'wrong_beatmapset_state' => 'فقط میتوانید در بحث بیت مپ های "در انتظار" رای بدهید.',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'شما فقط میتوانید پست های خودتان را حذف کنید.',
            'resolved' => 'شما نمی توانید یک پست از یک گفت و گوی حل شده را حذف کنید.',
            'system_generated' => 'پست هایی که خودکار ساخته شده اند، نمیتوانند حذف شوند.',
        ],

        'edit' => [
            'not_owner' => 'فقط ارسال کننده پست میتواند آن را ویرایش کند.',
            'resolved' => 'شما نمیتوانید یک پست از یک گفت و گوی حل شده را ویرایش کنید.',
            'system_generated' => 'پست هایی که خودکار ساخته شده اند، نمیتوانند ویرایش شوند.',
        ],
    ],

    'beatmapset' => [
        'discussion_locked' => 'مباحثه برای این بیت‌مپ قفل است.',

        'metadata' => [
            'nominated' => 'شما نمیتوانید متادیتای یک بیت مپ نامزد شده را عوض کنید. اگر فکر میکنید این اطلاعات اشتباه است به یک عضو BN یا NAT پیام دهید.',
        ],
    ],

    'beatmap_tag' => [
        'store' => [
            'no_score' => 'برای اضافه کردن تگ، باید امتیاز بیت‌مپ را تعیین کنید.',
        ],
    ],

    'chat' => [
        'blocked' => 'نمیتوان به کاربری پیام ارسال کرد که او را مسدود کرده اید یا او شما را مسدود کرده باشد.',
        'friends_only' => 'کاربر مورد نظر، پیام ها را از طرف کسانی که جزو لیست دوستانش نیستند، مسدود کرده است.',
        'moderated' => 'این کانال در حال حاضر نظارت شده است.',
        'no_access' => 'شما به آن کانال دسترسی ندارید.',
        'no_announce' => 'شما دسترسی لازم برای انتشار اعلامیه ندارید.',
        'receive_friends_only' => 'کاربر شاید نتواند به شما پاسخ بدهد چون شما فقط دوستانتان را مجاز به ارسال پیام کرده اید.',
        'restricted' => 'شما نمیتوانید موقعی که ساکت، محدود و یا مسدود شده اید پیام بفرستید.',
        'silenced' => 'شما نمیتوانید موقعی که ساکت، محدود و یا مسدود شده اید پیام بفرستید.',
    ],

    'comment' => [
        'store' => [
            'disabled' => 'نظرات غیرفعال است',
        ],
        'update' => [
            'deleted' => "نمیتوان پست پاک شده را ویرایش کرد.",
        ],
    ],

    'contest' => [
        'judging_not_active' => 'داوری برای این جشنواره غیرفعال است.',
        'voting_over' => 'شما نمیتوانید رای خود را بعد این که رقابت به پایان رسیده عوض کنید.',

        'entry' => [
            'limit_reached' => 'شما به محدودیت ورودی این رقابت رسیدید',
            'over' => 'از ورودی های ارسالی شما سپاسگزاریم! ارسال آثار برای این رقابت بسته شده و رای گیری به زودی آغاز خواهد شد.',
        ],
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'دسترسی مدیریت این انجمن را ندارید.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'فقط آخرین پست میتواند پاک شود.',
                'locked' => 'نمی توان پستی را از یک مبحث قفل شده حذف کرد.',
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'not_owner' => 'فقط ارسال کننده پست میتواند آن را پاک کند.',
            ],

            'edit' => [
                'deleted' => 'نمیتوان پست پاک شده را ویرایش کرد.',
                'locked' => 'این پست برای ویرایش قفل شده است.',
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'not_owner' => 'فقط ارسال کننده پست میتواند آن را ویرایش کند.',
                'topic_locked' => 'نمی توان پستی را از یک مبحث قفل شده ویرایش کرد.',
            ],

            'store' => [
                'play_more' => 'لطفا ابتدا سعی کنید قبل ارسال پست در انجمن بازی را (درست) انجام دهید! اگر با بازی کردن مشکل دارید، لطفا به انجمن کمک و پشتیبانی پست ارسال کنید.',
                'too_many_help_posts' => "شما باید کمی بیشتر بازی کنید قبل از این که بتوانید بیشتر از این کمک بخواهید. اگر مشکلی در بازی کردن osu! دارید به support@ppy.sh ایمیل بزنید", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'لطفا بجای گذاشتن پست جدید، پست قبلی را ویرایش کنید.',
                'locked' => 'نمی توانید به یک گفت و گوی قفل شده پاسخ بدهید.',
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'no_permission' => 'اجازه پاسخ ندارید.',

                'user' => [
                    'require_login' => 'لطفا برای پاسخ دادن وارد سایت شوید.',
                    'restricted' => "نمیوانید موقعی که محدود شده اید پاسخ ارسال کنید.",
                    'silenced' => "نمیتوانید موقعی که ساکت شده اید پاسخ ارسال کنید.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'no_permission' => 'مجوز برای ساخت مبحث جدید ندارید.',
                'forum_closed' => 'انجمن بسته شده و نمیتوان به آن پست ارسال کرد.',
            ],

            'vote' => [
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
                'over' => 'نظرسنجی تمام شده و نمیتوان دیگر به آن رای داد.',
                'play_more' => 'شما قبل از این که بتوانید در انجمن رای بدهید، باید بیشتر بازی کنید.',
                'voted' => 'تغییر رای مجاز نیست.',

                'user' => [
                    'require_login' => 'لطفا برای رای دادن وارد سایت شوید.',
                    'restricted' => "نمیتوانید موقعی که محدود شده اید رای بدهید.",
                    'silenced' => "نمیتوانید موقعی که در حالت سکوت هستید رای بدهید.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'دسترسی به انجمن مورد نظر لازم است.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'کاور نا معتبری مشخص شده است.',
                'not_owner' => 'فقط صاحب می تواند کاور را ادیت کند.',
            ],
            'store' => [
                'forum_not_allowed' => 'این انجمن از کاور برای گفت و گو ها پشتیبانی نمی کند.',
            ],
        ],

        'view' => [
            'admin_only' => 'فقط مدیران می توانند این انجمن را ببینند.',
        ],
    ],

    'room' => [
        'destroy' => [
            'not_owner' => 'فقط مالک اتاق می‌تواند آن را ببندد.',
        ],
    ],

    'score' => [
        'pin' => [
            'disabled_type' => "این نوع اسکور پین نمیشه",
            'failed' => "اسکور تکمیل‌نشده پین نمیشه.",
            'not_owner' => 'فقط صاحب امتیاز می تواند آن را سنجاق کند.',
            'too_many' => 'تعداد زیادی امتیاز سنجاق شده است.',
        ],
    ],

    'team' => [
        'application' => [
            'store' => [
                'already_member' => "",
                'already_other_member' => "",
                'currently_applying' => '',
                'team_closed' => '',
                'team_full' => "",
            ],
        ],
        'part' => [
            'is_leader' => "",
            'not_member' => '',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'صفحه کاربر قفل شده است.',
                'not_owner' => 'فقط میتوانید صفحه کاربری خودتان را ویرایش کنید.',
                'require_supporter_tag' => 'تگ حامی osu! نیاز است.',
            ],
        ],
        'update_email' => [
            'locked' => 'این آدرس ایمیل قفل است',
        ],
    ],
];
