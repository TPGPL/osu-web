<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[pengguna yang dihapus]',

    'beatmapset_activities' => [
        'title' => "Riwayat Modding :user",
        'title_compact' => 'Modding',

        'discussions' => [
            'title_recent' => 'Diskusi yang baru dimulai',
        ],

        'events' => [
            'title_recent' => 'Peristiwa terkini',
        ],

        'posts' => [
            'title_recent' => 'Postingan terkini',
        ],

        'votes_received' => [
            'title_most' => 'Paling banyak di-vote oleh (3 bulan terakhir)',
        ],

        'votes_made' => [
            'title_most' => 'Paling banyak di-vote (3 bulan terakhir)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Kamu telah memblokir pengguna ini.',
        'comment_text' => 'Komentar ini disembunyikan.',
        'blocked_count' => 'pengguna yang diblokir (:count)',
        'hide_profile' => 'Sembunyikan profil',
        'hide_comment' => 'sembunyikan',
        'forum_post_text' => 'Postingan ini disembunyikan.',
        'not_blocked' => 'Pengguna ini tidak diblokir.',
        'show_profile' => 'Tampilkan profil',
        'show_comment' => 'tampilkan',
        'too_many' => 'Batas pemblokiran tercapai.',
        'button' => [
            'block' => 'Blokir',
            'unblock' => 'Buka Blokir',
        ],
    ],

    'card' => [
        'gift_supporter' => 'Hadiahkan tag supporter',
        'loading' => 'Memuat...',
        'send_message' => 'Kirim pesan',
    ],

    'create' => [
        'form' => [
            'password' => 'kata sandi',
            'password_confirmation' => 'konfirmasi kata sandi',
            'submit' => 'buat akun',
            'user_email' => 'email',
            'user_email_confirmation' => 'konfirmasi email',
            'username' => 'nama pengguna',

            'tos_notice' => [
                '_' => 'dengan membuat akun, kamu menyatakan diri setuju dengan :link yang berlaku',
                'link' => 'ketentuan layanan',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'Uh-oh! Sepertinya akunmu telah dinonaktifkan.',
        'warning' => "Apabila kamu melanggar peraturan, akunmu akan ditempatkan pada masa tenggang selama satu bulan, di mana dalam rentang waktu ini kami tidak akan menanggapi permintaan banding apa pun yang terkait dengan akun kamu. Setelah masa ini berakhir, kamu baru akan dapat menghubungi kami untuk mengembalikan akunmu. Mohon diperhatikan bahwa membuat akun baru setelah akun utamamu dinonaktifkan <strong>hanya akan memperpanjang masa hukumanmu selama satu bulan</strong>, dan <strong>pelanggaranmu akan semakin berat untuk setiap akun baru yang kamu buat</strong>. Kami harap kamu dapat belajar dari kesalahanmu!",

        'if_mistake' => [
            '_' => 'Apabila kamu merasa bahwa hal ini merupakan sebuah kesalahan, kamu dipersilakan untuk menghubungi kami (baik melalui :email atau tombol "?" yang terletak pada pojok kanan bawah halaman ini) secara langsung. Mohon diperhatikan bahwa kami selalu sepenuhnya yakin akan seluruh tindakan kami, karena segala sesuatunya selalu kami dasarkan pada data yang konkrit. Kami berhak untuk tidak menindaklanjuti aduanmu apabila kami merasa kamu telah dengan sengaja berbohong kepada kami.',
            'email' => 'email',
        ],

        'reasons' => [
            'compromised' => 'Akunmu terindikasi telah disusupi. Akun ini akan dinonaktifkan untuk sementara waktu hingga identitas pengguna akun terkonfirmasi.',
            'opening' => 'Terdapat beberapa alasan yang dapat menyebabkan akunmu dinonaktifkan:',

            'tos' => [
                '_' => 'Kamu telah melanggar satu atau lebih poin yang tertera pada :community_rules atau :tos kami.',
                'community_rules' => 'peraturan komunitas',
                'tos' => 'ketentuan layanan',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'Pengguna berdasarkan mode permainan',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive' => "Akunmu telah lama tidak digunakan.",
            'inactive_different_country' => "Akunmu telah lama tidak digunakan.",
        ],
    ],

    'login' => [
        '_' => 'Masuk',
        'button' => 'Masuk',
        'button_posting' => 'Mencoba masuk...',
        'email_login_disabled' => 'Entri masuk dengan email saat ini sedang dinonaktifkan. Silakan masuk dengan menggunakan nama pengguna.',
        'failed' => 'Rincian masuk salah',
        'forgot' => 'Lupa kata sandi?',
        'info' => 'Silakan masuk untuk melanjutkan',
        'invalid_captcha' => 'Upaya masuk yang gagal terlalu banyak. Silakan selesaikan captcha dan coba lagi. (Muat ulang halaman ini apabila captcha tidak terlihat)',
        'locked_ip' => 'Alamat IP-mu dikunci. Silakan tunggu beberapa menit.',
        'password' => 'Kata Sandi',
        'register' => "Belum memiliki akun osu!? Buat sekarang",
        'remember' => 'Ingat perangkat ini',
        'title' => 'Silakan masuk untuk melanjutkan',
        'username' => 'Nama Pengguna',

        'beta' => [
            'main' => 'Akses beta saat ini terbatas bagi para pengguna dengan hak khusus.',
            'small' => '(para pemilik osu!supporter akan segera masuk)',
        ],
    ],

    'ogp' => [
        'modding_description' => 'Beatmap: :counts',
        'modding_description_empty' => 'Pengguna ini tidak memiliki beatmap apa pun...',

        'description' => [
            '_' => 'Peringkat (:ruleset): :global | :country',
            'country' => 'Negara :rank',
            'global' => 'Global :rank',
        ],
    ],

    'posts' => [
        'title' => 'Postingan :username',
    ],

    'anonymous' => [
        'login_link' => 'klik untuk masuk',
        'login_text' => 'masuk',
        'username' => 'Tamu',
        'error' => 'Kamu harus masuk untuk melakukan tindakan ini.',
    ],
    'logout_confirm' => 'Apakah kamu yakin ingin keluar? :(',
    'report' => [
        'button_text' => 'Laporkan',
        'comments' => 'Komentar',
        'placeholder' => 'Mohon berikan informasi apa pun yang kamu yakini dapat bermanfaat.',
        'reason' => 'Alasan',
        'thanks' => 'Terima kasih atas laporanmu!',
        'title' => 'Laporkan :username?',

        'actions' => [
            'send' => 'Kirim Laporan',
            'cancel' => 'Batal',
        ],

        'options' => [
            'cheating' => 'Melakukan kecurangan',
            'inappropriate_chat' => 'Berperilaku tidak pantas dalam chat',
            'insults' => 'Menghina saya / orang lain',
            'multiple_accounts' => 'Menggunakan lebih dari satu akun',
            'nonsense' => 'Beromong kosong',
            'other' => 'Lainnya (ketik di bawah)',
            'spam' => 'Spam',
            'unwanted_content' => 'Menautkan konten yang tidak pantas',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Akunmu telah di-restrict!',
        'message' => 'Selama di-restrict, kamu tidak akan dapat berinteraksi dengan para pengguna lain dan skormu hanya akan dapat dilihat oleh dirimu sendiri. Hal ini biasanya merupakan hasil dari proses otomatis yang berlangsung dan akan diangkat dalam 24 jam. :link',
        'message_link' => 'Kunjungi halaman ini untuk informasi lebih lanjut.',
    ],
    'show' => [
        'age' => ':age tahun',
        'change_avatar' => 'ubah avatarmu!',
        'first_members' => 'Di sini sejak awal',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Bergabung pada :date',
        'lastvisit' => 'Terakhir terlihat :date',
        'lastvisit_online' => 'Saat ini online',
        'missingtext' => 'Mungkin kamu salah ketik! (atau pengguna ini telah di-ban)',
        'origin_country' => 'Dari :country',
        'previous_usernames' => 'sebelumnya dikenal sebagai',
        'plays_with' => 'Bermain menggunakan :devices',

        'comments_count' => [
            '_' => 'Telah mengirimkan :link',
            'count' => ':count_delimited komentar|:count_delimited komentar',
        ],
        'cover' => [
            'to_0' => 'Sembunyikan sampul',
            'to_1' => 'Tampilkan sampul',
        ],
        'daily_challenge' => [
            'daily' => 'Rantai Harian',
            'daily_streak_best' => 'Rantai Harian Terlama',
            'daily_streak_current' => 'Rantai Harian Saat Ini',
            'playcount' => 'Jumlah Keikutsertaan',
            'title' => 'Tantangan\nHarian',
            'top_10p_placements' => 'Penempatan 10% Teratas',
            'top_50p_placements' => 'Penempatan 50% Teratas',
            'weekly' => 'Rantai Mingguan',
            'weekly_streak_best' => 'Rantai Mingguan Terlama',
            'weekly_streak_current' => 'Rantai Mingguan Saat Ini',

            'unit' => [
                'day' => ':valuehr',
                'week' => ':valuemg',
            ],
        ],
        'edit' => [
            'cover' => [
                'button' => 'Ubah Sampul Profil',
                'defaults_info' => 'Pilihan sampul lainnya akan tersedia di masa mendatang',
                'holdover_remove_confirm' => "Gambar sampul yang sebelumnya dipilih kini sudah tidak lagi tersedia. Kamu tidak lagi akan dapat memilih gambar ini setelah kamu beralih ke gambar sampul lain. Lanjut?",
                'title' => 'Sampul',

                'upload' => [
                    'broken_file' => 'Gambar gagal diproses. Periksa keabsahan gambar yang diunggah dan coba lagi.',
                    'button' => 'Unggah gambar',
                    'dropzone' => 'Letakkan di sini untuk mengunggah',
                    'dropzone_info' => 'Kamu juga dapat meletakkan gambarmu di sini untuk mengunggah',
                    'size_info' => 'Ukuran gambar sampul yang disarankan adalah 2400x640',
                    'too_large' => 'Berkas yang diunggah terlalu besar.',
                    'unsupported_format' => 'Format tidak didukung.',

                    'restriction_info' => [
                        '_' => 'Pengunggahan gambar sampul hanya tersedia bagi para pemilik :link',
                        'link' => 'osu!supporter',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'mode permainan utama',
                'set' => 'atur :mode sebagai mode permainan utamamu',
            ],

            'hue' => [
                'reset_no_supporter' => 'Atur ulang warna ke pengaturan bawaan? Tag supporter akan dibutuhkan untuk mengubah warna ini ke warna yang berbeda.',
                'title' => 'Warna',

                'supporter' => [
                    '_' => 'Warna tema khusus hanya tersedia bagi para pemilik :link',
                    'link' => 'osu!supporter',
                ],
            ],
        ],

        'extra' => [
            'none' => 'kosong',
            'unranked' => 'Tidak ada riwayat permainan terkini',

            'achievements' => [
                'achieved-on' => 'Diraih pada :date',
                'locked' => 'Terkunci',
                'title' => 'Pencapaian',
            ],
            'beatmaps' => [
                'by_artist' => 'oleh :artist',
                'title' => 'Beatmap',

                'favourite' => [
                    'title' => 'Beatmap Favorit',
                ],
                'graveyard' => [
                    'title' => 'Beatmap Graveyard',
                ],
                'guest' => [
                    'title' => 'Beatmap dengan Kontribusi Guest Difficulty',
                ],
                'loved' => [
                    'title' => 'Beatmap Loved',
                ],
                'nominated' => [
                    'title' => 'Beatmap Ranked yang Dinominasikan',
                ],
                'pending' => [
                    'title' => 'Beatmap Pending',
                ],
                'ranked' => [
                    'title' => 'Beatmap Ranked',
                ],
            ],
            'discussions' => [
                'title' => 'Diskusi',
                'title_longer' => 'Topik Diskusi Terkini',
                'show_more' => 'lihat lebih banyak diskusi',
            ],
            'events' => [
                'title' => 'Peristiwa',
                'title_longer' => 'Peristiwa Terkini',
                'show_more' => 'lihat lebih banyak peristiwa',
            ],
            'historical' => [
                'title' => 'Historis',

                'monthly_playcounts' => [
                    'title' => 'Riwayat Permainan',
                    'count_label' => 'Kali Bermain',
                ],
                'most_played' => [
                    'count' => 'jumlah dimainkan',
                    'title' => 'Beatmap yang Paling Sering Dimainkan',
                ],
                'recent_plays' => [
                    'accuracy' => 'akurasi: :percentage',
                    'title' => 'Rekam Jejak Permainan Terkini (24 jam)',
                ],
                'replays_watched_counts' => [
                    'title' => 'Riwayat Pemutaran Tayangan Ulang',
                    'count_label' => 'Kali Tayangan Ulang Ditonton',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'Riwayat Kudosu Terbaru',
                'title' => 'Kudosu!',
                'total' => 'Jumlah Kudosu yang Diperoleh',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "Pengguna ini belum pernah menerima kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Memperoleh :amount atas dibatalkannya penganuliran kudosu pada topik diskusi :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Kehilangan :amount kudosu karena suara yang diperoleh pada topik diskusi :post telah dianulir',
                        ],

                        'delete' => [
                            'reset' => 'Kehilangan :amount atas penghapusan topik diskusi :post',
                        ],

                        'restore' => [
                            'give' => 'Memperoleh :amount atas dipulihkannya topik diskusi :post',
                        ],

                        'vote' => [
                            'give' => 'Memperoleh :amount dari suara yang didapat pada topik diskusi :post',
                            'reset' => 'Kehilangan :amount dari suara yang hilang pada topik diskusi :post',
                        ],

                        'recalculate' => [
                            'give' => 'Memperoleh :amount atas penghitungan ulang suara pada topik diskusi :post',
                            'reset' => 'Kehilangan :amount atas penghitungan ulang suara pada topik diskusi :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Memperoleh :amount dari :giver untuk mod yang diberikan pada beatmap :post',
                        'reset' => 'Kudosu untuk mod yang diberikan pada beatmap :post diatur ulang oleh :giver ',
                        'revoke' => 'Kudosu untuk mod yang diberikan pada beatmap :post ditolak oleh :giver ',
                    ],
                ],

                'total_info' => [
                    '_' => 'Berdasarkan seberapa banyak kontribusi yang telah diberikan oleh pengguna ini terhadap moderasi beatmap. Kunjungi :link untuk informasi lebih lanjut.',
                    'link' => 'halaman ini',
                ],
            ],
            'me' => [
                'title' => 'saya!',
            ],
            'medals' => [
                'empty' => "Pengguna ini belum membuka medali apa pun. ;_;",
                'recent' => 'Terbaru',
                'title' => 'Medali',
            ],
            'playlists' => [
                'title' => 'Permainan Playlist',
            ],
            'posts' => [
                'title' => 'Postingan',
                'title_longer' => 'Postingan Terkini',
                'show_more' => 'lihat lebih banyak postingan',
            ],
            'recent_activity' => [
                'title' => 'Aktivitas Terkini',
            ],
            'realtime' => [
                'title' => 'Permainan Multiplayer',
            ],
            'top_ranks' => [
                'download_replay' => 'Unduh Tayangan Ulang',
                'not_ranked' => 'Hanya beatmap Ranked yang memberikan pp',
                'pp_weight' => 'terbobotkan sejumlah :percentage',
                'view_details' => 'Lihat Rincian',
                'title' => 'Peringkat',

                'best' => [
                    'title' => 'Performa Terbaik',
                ],
                'first' => [
                    'title' => 'Peringkat Pertama',
                ],
                'pin' => [
                    'to_0' => 'Lepas Sematan',
                    'to_0_done' => 'Sematan skor dilepas',
                    'to_1' => 'Sematkan',
                    'to_1_done' => 'Skor disematkan',
                ],
                'pinned' => [
                    'title' => 'Skor yang Disematkan',
                ],
            ],
            'votes' => [
                'given' => 'Suara Diberikan (3 bulan terakhir)',
                'received' => 'Suara Diterima (3 bulan terakhir)',
                'title' => 'Hak Suara',
                'title_longer' => 'Riwayat Pemberian Suara Terkini',
                'vote_count' => ':count_delimited suara|:count_delimited suara',
            ],
            'account_standing' => [
                'title' => 'Kondisi Akun',
                'bad_standing' => "Akun :username tidak sedang berada dalam kondisi yang baik :(",
                'remaining_silence' => ':username akan dapat kembali berbicara :duration.',

                'recent_infringements' => [
                    'title' => 'Pelanggaran Terkini',
                    'date' => 'waktu',
                    'action' => 'tindak lanjut',
                    'length' => 'durasi',
                    'length_indefinite' => 'Tak tentu',
                    'description' => 'keterangan',
                    'actor' => 'oleh :username',

                    'actions' => [
                        'restriction' => 'Ban',
                        'silence' => 'Silence',
                        'tournament_ban' => 'Larangan turnamen',
                        'note' => 'Catatan',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Minat',
            'location' => 'Lokasi Saat Ini',
            'occupation' => 'Pekerjaan',
            'twitter' => '',
            'website' => 'Website',
        ],
        'not_found' => [
            'reason_1' => 'Pengguna ini telah mengubah nama penggunanya.',
            'reason_2' => 'Pengguna ini telah dinonaktifkan untuk sementara waktu karena memiliki riwayat masalah yang berhubungan dengan keamanan atau penyalahgunaan akun.',
            'reason_3' => 'Atau mungkin kamu salah ketik!',
            'reason_header' => 'Ada beberapa kemungkinan mengapa hal ini bisa terjadi:',
            'title' => 'Pengguna tidak ditemukan! ;_;',
        ],
        'page' => [
            'button' => 'sunting halaman profil',
            'description' => '<strong>saya!</strong> merupakan area pribadi pada halaman profilmu yang dapat kamu isi sesuka hati.',
            'edit_big' => 'Sunting saya!',
            'placeholder' => 'Ketik konten halaman di sini',

            'restriction_info' => [
                '_' => 'Kamu harus menjadi seorang :link untuk menggunakan fitur ini.',
                'link' => 'osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => 'Berkontribusi pada :link',
            'count' => ':count_delimited postingan forum|:count_delimited postingan forum',
        ],
        'rank' => [
            'country' => 'Peringkat negara untuk :mode',
            'country_simple' => 'Peringkat Nasional',
            'global' => 'Peringkat global untuk :mode',
            'global_simple' => 'Peringkat Global',
            'highest' => 'Peringkat tertinggi: :rank pada :date',
        ],
        'season_stats' => [
            'division_top_percentage' => ':value teratas',
            'total_score' => 'Jumlah skor',
        ],
        'stats' => [
            'hit_accuracy' => 'Akurasi Hit',
            'hits_per_play' => '',
            'level' => 'Level :level',
            'level_progress' => 'persentase pencapaian menuju level berikutnya',
            'maximum_combo' => 'Kombo Maksimum',
            'medals' => 'Jumlah Medali',
            'play_count' => 'Jumlah Permainan',
            'play_time' => 'Telah Bermain Selama',
            'ranked_score' => 'Skor Ranked',
            'replays_watched_by_others' => 'Jumlah Pemutaran Tayangan Ulang',
            'score_ranks' => 'Peringkat Skor',
            'total_hits' => 'Jumlah Hit',
            'total_score' => 'Jumlah Skor',
            // modding stats
            'graveyard_beatmapset_count' => 'Beatmap Graveyard',
            'loved_beatmapset_count' => 'Beatmap Loved',
            'pending_beatmapset_count' => 'Beatmap Pending',
            'ranked_beatmapset_count' => 'Beatmap Ranked',
        ],
    ],

    'silenced_banner' => [
        'title' => 'Kamu sedang di-silence.',
        'message' => 'Tindakan tertentu mungkin tidak akan tersedia.',
    ],

    'status' => [
        'all' => 'Semua',
        'online' => 'Online',
        'offline' => 'Offline',
    ],
    'store' => [
        'from_client' => 'silakan mendaftarkan diri melalui klien permainan!',
        'from_web' => 'mohon selesaikan pendaftaran melalui situs web osu!',
        'saved' => 'Pengguna dibuat',
    ],
    'verify' => [
        'title' => 'Verifikasi Akun',
    ],

    'view_mode' => [
        'brick' => 'Tampilan susun bata',
        'card' => 'Tampilan kartu',
        'list' => 'Tampilan daftar',
    ],
];
