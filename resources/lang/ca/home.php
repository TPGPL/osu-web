<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'landing' => [
        'download' => 'Descarregar ara',
        'online' => 'hi ha <strong>:players</strong>  en línia, en un total de <strong>:games</strong> partides',
        'peak' => 'Pic, :count usuaris en línia',
        'players' => '<strong>:count</strong> jugadors registrats',
        'title' => 'benvingut',
        'see_more_news' => 'veure més novetats',

        'slogan' => [
            'main' => 'el millor joc de ritme gratuït',
            'sub' => 'el ritme només a un clic',
        ],
    ],

    'search' => [
        'advanced_link' => 'Cerca avançada',
        'button' => 'Cerca',
        'empty_result' => 'No s\'ha trobat res!',
        'keyword_required' => 'Es necessita una paraula clau',
        'placeholder' => 'escriu per cercar',
        'title' => 'cerca',

        'artist_track' => [
            'more_simple' => 'Mostra més resultats de cerca de pistes d\'artista destacat',
        ],
        'beatmapset' => [
            'login_required' => 'Inicieu sessió per cercar mapes',
            'more' => ':count resultats més de cerca de mapes',
            'more_simple' => 'Veure més resultats',
            'title' => 'Mapes',
        ],

        'forum_post' => [
            'all' => 'Tots els fòrums',
            'link' => 'Cerca en el fòrum',
            'login_required' => 'Inicia sessió per cercar en el fòrum',
            'more_simple' => 'Veure més resultats',
            'title' => 'Fòrum',

            'label' => [
                'forum' => 'cerca en fòrums',
                'forum_children' => 'inclou subfòrums',
                'include_deleted' => 'inclou publicacions eliminades',
                'topic_id' => 'tema #',
                'username' => 'autor',
            ],
        ],

        'mode' => [
            'all' => 'tots',
            'artist_track' => 'pista d\'artista destacat',
            'beatmapset' => 'mapa',
            'forum_post' => 'fòrum',
            'team' => 'equip',
            'user' => 'jugador',
            'wiki_page' => 'wiki',
        ],

        'team' => [
            'more_simple' => 'Mostra més resultats de la cerca d\'equip',
        ],

        'user' => [
            'login_required' => 'Inicia sessió per cercar usuaris',
            'more' => ':count més resultats de jugadors',
            'more_simple' => 'Veure més resultats',
            'more_hidden' => 'La cerca està limitada a :max jugadors. Intenta refinar la consulta.',
            'title' => 'Jugadors',
        ],

        'wiki_page' => [
            'link' => 'Cerca la wiki',
            'more_simple' => 'Veure més resultats',
            'title' => 'Wiki',
        ],
    ],

    'download' => [
        'action' => 'Descarrega l\'osu!',
        'action_lazer' => 'Descarregar osu!(lazer)',
        'action_lazer_description' => 'la propera gran actualització d\'osu!',
        'action_lazer_info' => 'consulteu aquesta pàgina per obtenir més informació',
        'action_lazer_title' => 'prova osu!(lazer)',
        'action_title' => 'descarrega osu!',
        'for_os' => 'per :os',
        'macos-fallback' => 'usuaris de macOS',
        'mirror' => 'enllaç alternatiu',
        'or' => 'o',
        'os_version_or_later' => ':os_version o posterior',
        'other_os' => 'altres plataformes',
        'quick_start_guide' => 'guia d\'inici ràpid',
        'tagline' => "endavant<br>comencem!",
        'video-guide' => 'guia en vídeo',

        'help' => [
            '_' => 'si trobes un problema començant el joc o registrant un compte, :help_forum_link o :support_button.',
            'help_forum_link' => 'visita el fòrum d\'ajuda',
            'support_button' => 'contacta l\'equip de suport',
        ],

        'os' => [
            'windows' => 'per a Windows',
            'macos' => 'per a macOS',
            'linux' => 'per a Linux',
        ],
        'steps' => [
            'register' => [
                'title' => 'crea un compte',
                'description' => 'segueix les instruccions a l\'iniciar el joc per iniciar sessió o crear un nou compte',
            ],
            'download' => [
                'title' => 'descarregar el joc',
                'description' => 'fes clic al botó de dalt per descarregar l\'instal·lador, després executa-ho!',
            ],
            'beatmaps' => [
                'title' => 'obtén mapes',
                'description' => [
                    '_' => ':browse l\'enorme biblioteca de mapes creats pels usuaris i comença a jugar!',
                    'browse' => 'cerca',
                ],
            ],
        ],
    ],

    'user' => [
        'title' => 'tauler',
        'news' => [
            'title' => 'Notícies',
            'error' => 'Error en carregar les novetats, intenta actualitzar la pàgina?...',
        ],
        'header' => [
            'stats' => [
                'friends' => 'Amics en línia',
                'games' => 'Partides',
                'online' => 'Usuaris en línia',
            ],
        ],
        'beatmaps' => [
            'daily_challenge' => '',
            'new' => 'Mapes Classificats Nous',
            'popular' => 'Mapes Populars',
            'by_user' => 'per :user',
            'resets' => '',
        ],
        'buttons' => [
            'download' => 'Descarrega l\'osu!',
            'support' => 'Dona suport a l\'osu!',
            'store' => 'osu!store',
        ],
    ],
];
