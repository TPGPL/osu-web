<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'cart' => [
        'checkout' => 'Platba',
        'empty_cart' => '',
        'info' => '',
        'more_goodies' => 'Chcem sa ešte pozrieť na viac dobrôt než dokončím objednávku',
        'shipping_fees' => 'poplatky za dopravu',
        'title' => 'Nákupný Košík',
        'total' => 'spolu',

        'errors_no_checkout' => [
            'line_1' => 'Ups, nastali problémy s vaším košíkom, ktoré zabraňuju platbe!',
            'line_2' => 'Pre pokračovanie odstraňte alebo aktualizujte predmety hore.',
        ],

        'empty' => [
            'text' => 'Váš košík je prázdny.',
            'return_link' => [
                '_' => 'Vrať sa na :link, aby si našiel nejaké dobroty!',
                'link_text' => 'veci v obchode',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Ups, s tvojim košíkom sa vyskytli nejaké problémy!',
        'cart_problems_edit' => 'Pre editovanie klikni sem.',
        'declined' => 'Tvoja platba bola zamietnutá.',
        'delayed_shipping' => 'Momentálne sme zaplavení objednávkami! Svoju objednávku môžeš zadať, ale prosím počítaj s **dodatočným 1-2 tyždennym oneskorením** zatial čo dokončíme existujúce objednávky.',
        'hide_from_activity' => '',
        'old_cart' => 'Obsah tvojho košíka sa zdá byť zastaralý a preto bol znovu načítaný, skus to prosím znovu.',
        'pay' => 'Platba cez PayPal',
        'title_compact' => '',

        'has_pending' => [
            '_' => 'Nemáte dokončené platby, kliknite :link aby ste si ich mohli pozrieť.',
            'link_text' => 'tu',
        ],

        'pending_checkout' => [
            'line_1' => 'Predchádzajúci nákup nebol dokončený.',
            'line_2' => 'Pokračujte v platbe vybraním platobnej metódy.',
        ],
    ],

    'discount' => 'ušetri :percent%',
    'free' => '',

    'invoice' => [
        'contact' => '',
        'date' => '',
        'echeck_delay' => '',
        'echeck_denied' => '',
        'hide_from_activity' => '',
        'sent_via' => '',
        'shipping_to' => '',
        'title' => '',
        'title_compact' => '',

        'status' => [
            'cancelled' => [
                'title' => '',
                'line_1' => [
                    '_' => "",
                    'link_text' => '',
                ],
            ],
            'delivered' => [
                'title' => '',
                'line_1' => [
                    '_' => '',
                    'link_text' => '',
                ],
            ],
            'prepared' => [
                'title' => '',
                'line_1' => '',
                'line_2' => '',
            ],
            'processing' => [
                'title' => 'Vaša platba ešte nebola potvrdená!',
                'line_1' => '',
                'line_2' => [
                    '_' => 'Ak sa vyskytol problém počas platby, :link',
                    'link_text' => 'kliknutím sem obnovíte vašu platbu',
                ],
            ],
            'shipped' => [
                'title' => '',
                'tracking_details' => '',
                'no_tracking_details' => [
                    '_' => "",
                    'link_text' => '',
                ],
            ],
        ],
    ],

    'order' => [
        'cancel' => '',
        'cancel_confirm' => '',
        'cancel_not_allowed' => '',
        'invoice' => 'Zobraziť faktúru',
        'no_orders' => 'Žiadne objednávky na zobrazenie.',
        'paid_on' => '',
        'resume' => '',
        'shipping_and_handling' => '',
        'shopify_expired' => '',
        'subtotal' => '',
        'total' => '',

        'details' => [
            'order_number' => '',
            'payment_terms' => '',
            'salesperson' => '',
            'shipping_method' => '',
            'shipping_terms' => '',
            'title' => '',
        ],

        'item' => [
            'quantity' => 'Množstvo',

            'display_name' => [
                'supporter_tag' => ':name pre :username (:duration)',
            ],

            'subtext' => [
                'supporter_tag' => '',
            ],
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Nemôžeš upraviť svoju objednávku, kedže bola zrušená.',
            'checkout' => 'Nemôźeš upraviť svoju objednávku, kedže sa už spracováva.', // checkout and processing should have the same message.
            'default' => 'Objednávka je neupravitelná',
            'delivered' => 'Nemôžeš upraviť svoju objednávku, kedže už bola doručená.',
            'paid' => 'Nemôžeš upraviť svoju objednávku, kedže si za ňu už zaplatil.',
            'processing' => 'Nemôžeš upraviť svoju objednávku, kedže je v stave spracovania.',
            'shipped' => 'Nemôžeš upraviť svoju objednávku, kedže bola dodaná.',
        ],

        'status' => [
            'cancelled' => 'Zrušené',
            'checkout' => 'Pripravuje sa',
            'delivered' => 'Objednávka doručená',
            'paid' => 'Zaplatené',
            'processing' => 'Čaká sa na potvrdenie',
            'shipped' => 'Na ceste',
            'title' => '',
        ],

        'thanks' => [
            'title' => '',
            'line_1' => [
                '_' => '',
                'link_text' => '',
            ],
        ],
    ],

    'product' => [
        'name' => 'Meno',

        'stock' => [
            'out' => 'Táto položka je momentálne vypredaná. Vráť sa neskôr!',
            'out_with_alternative' => 'Bohužial, táto položka je vypredaná. Použi rozbaľovací zoznam pre výber iného druhu alebo sa pozri neskôr!',
        ],

        'add_to_cart' => 'Pridať do košíka',
        'notify' => 'Informujte ma, ak je k dispozícii!',
        'out_of_stock' => '',

        'notification_success' => 'budeš informovaný, keď budeme mať nové zásoby. kliknite :link pre zrušenie',
        'notification_remove_text' => 'tu',

        'notification_in_stock' => 'Tento produkt už je na sklade!',
    ],

    'supporter_tag' => [
        'gift' => 'darovať hráčovi',
        'gift_message' => '',

        'require_login' => [
            '_' => 'Musíš byť :link aby si dostal osu!supporter tag!',
            'link_text' => 'prihlásený',
        ],
    ],

    'username_change' => [
        'check' => 'Zadaj uživatelské meno pre kontrolu dostupnosti!',
        'checking' => 'Prebieha kontrola dostupnosti uživatelského mena :username...',
        'placeholder' => '',
        'label' => '',
        'current' => '',

        'require_login' => [
            '_' => 'Pre zmenu uživatelského mena sa musíš :link!',
            'link_text' => 'prihlásený',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
