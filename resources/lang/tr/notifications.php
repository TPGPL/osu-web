<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => 'Tüm bildirimler okundu!',
    'delete' => ':type sil',
    'loading' => 'Okunmamış bildirimler yükleniyor...',
    'mark_read' => ':type temizle',
    'none' => 'Bildirim yok',
    'see_all' => 'tüm bildirimleri gör',
    'see_channel' => 'sohbete git',
    'verifying' => 'Bildirimleri görüntülemek için lütfen oturumunuzu doğrulayın',

    'action_type' => [
        '_' => 'hepsi',
        'beatmapset' => 'haritalar',
        'build' => 'sürümler',
        'channel' => 'sohbet',
        'forum_topic' => 'forum',
        'news_post' => 'haberler',
        'team' => 'takım',
        'user' => 'profil',
    ],

    'filters' => [
        '_' => 'hepsi',
        'beatmapset' => 'haritalar',
        'build' => 'sürümler',
        'channel' => 'sohbet',
        'forum_topic' => 'forum',
        'news_post' => 'gelişmeler',
        'team' => 'takım',
        'user' => 'profil',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Harita',

            'beatmap_owner_change' => [
                '_' => 'Konuk zorluk',
                'beatmap_owner_change' => 'Artık ":title" beatmapindeki ":beatmap" zorluğunun sahibisiniz',
                'beatmap_owner_change_compact' => 'Artık ":beatmap" zorluğunun sahibisiniz',
            ],

            'beatmapset_discussion' => [
                '_' => 'Beatmap tartışması',
                'beatmapset_discussion_lock' => '":title" setinin tartışması kilitlendi',
                'beatmapset_discussion_lock_compact' => 'Tartışma kilitlenmiş',
                'beatmapset_discussion_post_new' => '":title" setinde :username tarafından yeni bir gönderi mevcut: ":content"',
                'beatmapset_discussion_post_new_empty' => '":title" setinde :username tarafından yeni gönderi',
                'beatmapset_discussion_post_new_compact' => ':username tarafından yeni gönderi: ":content"',
                'beatmapset_discussion_post_new_compact_empty' => ':username tarafından yeni gönderi',
                'beatmapset_discussion_review_new' => '":title" için :username tarafından yeni inceleme, :problems sorun, :suggestions öneri, :praises övgü içeriyor',
                'beatmapset_discussion_review_new_compact' => ':username tarafından yeni inceleme, :problems sorun, :suggestions öneri, :praises övgü içeriyor',
                'beatmapset_discussion_unlock' => '":title" setinin tartışmasının kilidi kaldırıldı',
                'beatmapset_discussion_unlock_compact' => 'Tartışmanın kilidi kaldırılmış',

                'review_count' => [
                    'praises' => ':count_delimited övgü|:count_delimited övgü',
                    'problems' => ':count_delimited sorun|:count_delimited sorun',
                    'suggestions' => ':count_delimited öneri|:count_delimited öneri',
                ],
            ],

            'beatmapset_problem' => [
                '_' => 'Nitelikli Beatmap sorunu',
                'beatmapset_discussion_qualified_problem' => ':username tarafından bildirildi ":title": ":content"',
                'beatmapset_discussion_qualified_problem_empty' => ':username tarafından bildirildi ":title"',
                'beatmapset_discussion_qualified_problem_compact' => ':username tarafından rapor edildi: ":content"',
                'beatmapset_discussion_qualified_problem_compact_empty' => ':username tarafından rapor edildi',
            ],

            'beatmapset_state' => [
                '_' => 'Beatmap durumu değişti',
                'beatmapset_disqualify' => '":title" diskalifiye edildi',
                'beatmapset_disqualify_compact' => 'Beatmap diskalifiye edildi',
                'beatmapset_love' => '":title" sevilenlere yükseltildi',
                'beatmapset_love_compact' => 'Beatmap sevilenlere yükseltildi',
                'beatmapset_nominate' => '":title" aday gösterildi',
                'beatmapset_nominate_compact' => 'Beatmap aday gösterildi',
                'beatmapset_qualify' => '":title" yeterli aday gösterimi aldı ve derecelendirme sırasına girdi',
                'beatmapset_qualify_compact' => 'Beatmap derecelendirme sırasına girdi',
                'beatmapset_rank' => '":title" dereceli oldu',
                'beatmapset_rank_compact' => 'Beatmap dereceli oldu',
                'beatmapset_remove_from_loved' => '":title" Sevilenlerden çıkarıldı',
                'beatmapset_remove_from_loved_compact' => 'Beatmap Sevilenlerden çıkarıldı',
                'beatmapset_reset_nominations' => '":title" setinin adaylığı sıfırlandı',
                'beatmapset_reset_nominations_compact' => 'Adaylık sıfırlandı',
            ],

            'comment' => [
                '_' => 'Yeni yorum',

                'comment_new' => ':username ":title" üzerinde ":content" yorumunu yaptı',
                'comment_new_compact' => ':username ":content" yorumunu yaptı',
                'comment_reply' => ':username ":title" üzerinde ":content" yanıtını verdi',
                'comment_reply_compact' => ':username ":content" yanıtını verdi',
            ],
        ],

        'channel' => [
            '_' => 'Sohbet',

            'announcement' => [
                '_' => 'Yeni duyuru',

                'announce' => [
                    'channel_announcement' => ':username ":title" diyor',
                    'channel_announcement_compact' => ':title',
                    'channel_announcement_group' => ':username tarafından duyuru',
                ],
            ],

            'channel' => [
                '_' => 'Yeni mesaj',

                'pm' => [
                    'channel_message' => ':username ":title" diyor',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => ':username tarafından',
                ],
            ],

            'channel_team' => [
                '_' => 'Yeni takım mesajı',

                'team' => [
                    'channel_team' => ':username ":title" diyor',
                    'channel_team_compact' => ':username ":title" diyor',
                    'channel_team_group' => ':username ":title" diyor',
                ],
            ],
        ],

        'build' => [
            '_' => 'Değişiklik kayıtları',

            'comment' => [
                '_' => 'Yeni yorum',

                'comment_new' => ':username ":title" üzerinde ":content" yorumunu yaptı',
                'comment_new_compact' => ':username ":content" yorumunu yaptı',
                'comment_reply' => ':username ":title" üzerinde ":content" yanıtını verdi',
                'comment_reply_compact' => ':username ":content" yanıtını verdi',
            ],
        ],

        'news_post' => [
            '_' => 'Gelişmeler',

            'comment' => [
                '_' => 'Yeni yorum',

                'comment_new' => ':username ":title" üzerinde ":content" yorumunu yaptı',
                'comment_new_compact' => ':username ":content" yorumunu yaptı',
                'comment_reply' => ':username ":title" üzerinde ":content" yanıtını verdi',
                'comment_reply_compact' => ':username ":content" yanıtını verdi',
            ],
        ],

        'forum_topic' => [
            '_' => 'Forum konusu',

            'forum_topic_reply' => [
                '_' => 'Yeni forum yanıtı',
                'forum_topic_reply' => ':username ":title" konusuna yanıt verdi.',
                'forum_topic_reply_compact' => ':username yanıt verdi',
            ],
        ],

        'team' => [
            'team_application' => [
                '_' => 'Takım katılım isteği',

                'team_application_accept' => "Artık :title takımının bir üyesisin",
                'team_application_accept_compact' => "Artık :title takımının bir üyesisin",

                'team_application_group' => 'Takıma katılma isteği güncellemeleri',

                'team_application_reject' => ':title takıma giriş isteğin reddedildi',
                'team_application_reject_compact' => ':title takımına giriş isteğiniz reddedildi',
                'team_application_store' => ':title takımına katılmak için istek gönderdi',
                'team_application_store_compact' => ':title takımına katılmak için istek gönderdi',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                '_' => 'Yeni beatmap',

                'user_beatmapset_new' => ':username tarafından yeni beatmap ":title"',
                'user_beatmapset_new_compact' => 'Yeni beatmap ":title"',
                'user_beatmapset_new_group' => ' :username tarafından yapılmış yeni beatmapler',

                'user_beatmapset_revive' => '":title" adlı beatmap :username tarafından hayata geri döndürüldü',
                'user_beatmapset_revive_compact' => '":title" adlı beatmap hayata geri döndürüldü',
            ],
        ],

        'user_achievement' => [
            '_' => 'Madalyalar',

            'user_achievement_unlock' => [
                '_' => 'Yeni madalya',
                'user_achievement_unlock' => '":title" \'ın kilidi açıldı!',
                'user_achievement_unlock_compact' => '":title" \'ın kilidi açıldı!',
                'user_achievement_unlock_group' => 'Madalyalar açıldı!',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmap_owner_change' => [
                'beatmap_owner_change' => 'Artık ":title" beatmapinin bir konuğusunuz',
            ],

            'beatmapset_discussion' => [
                'beatmapset_discussion_lock' => '":title" setinin tartışması kilitlendi',
                'beatmapset_discussion_post_new' => '":title" setinin tartışmasında yeni güncellemeler mevcut',
                'beatmapset_discussion_unlock' => '":title" setinin tartışmasının kilidi kaldırıldı',
            ],

            'beatmapset_problem' => [
                'beatmapset_discussion_qualified_problem' => '":title" setinde yeni bir sorun bildirildi',
            ],

            'beatmapset_state' => [
                'beatmapset_disqualify' => '":title" diskalifiye edildi',
                'beatmapset_love' => '":title" sevilenlere yükseltildi',
                'beatmapset_nominate' => '":title" aday gösterildi',
                'beatmapset_qualify' => '":title" yeterli aday gösterimi aldı ve derecelendirme sırasına girdi',
                'beatmapset_rank' => '":title" dereceli oldu',
                'beatmapset_remove_from_loved' => '":title" Sevilenlerden çıkarıldı',
                'beatmapset_reset_nominations' => '":title" setinin adaylığı sıfırlandı',
            ],

            'comment' => [
                'comment_new' => '":title" beatmapinde yeni yorumlar mevcut',
            ],
        ],

        'channel' => [
            'announcement' => [
                'channel_announcement' => '":name"da yeni bir duyuru var',
            ],
            'channel' => [
                'channel_message' => ':username\'dan yeni bir mesaj aldın',
            ],
            'channel_team' => [
                'channel_team' => '":name" takımından yeni bir mesaj var',
            ],
        ],

        'build' => [
            'comment' => [
                'comment_new' => '":title" değişiklik kaydında yeni yorumlar mevcut',
            ],
        ],

        'news_post' => [
            'comment' => [
                'comment_new' => '":title" haber göndersinde yeni yorumlar mevcut',
            ],
        ],

        'forum_topic' => [
            'forum_topic_reply' => [
                'forum_topic_reply' => '":title" konusunda yeni yanıtlar mevcut',
            ],
        ],

        'team' => [
            'team_application' => [
                'team_application_accept' => "Artık :title takımının bir üyesisin",
                'team_application_reject' => ':title takımına giriş isteğiniz reddedildi',
                'team_application_store' => ':title takımına katılmak için istek gönderdi',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                'user_beatmapset_new' => ':username yeni beatmapler yaptı',
                'user_beatmapset_revive' => ':username beatmap\'leri hayata geri döndürdü',
            ],
        ],
    ],
];
