<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'page_description' => 'Επιλεγμένοι καλλιτέχνες στο osu!',
    'title' => 'Επιλεγμένοι Kαλλιτέχνες',

    'admin' => [
        'hidden' => 'Ο ΚΑΛΛΙΤΕΧΝΗΣ ΕΙΝΑΙ ΠΡΟΣ ΤΟ ΠΑΡΟΝ ΚΕΚΡΥΜΜΕΝΟΣ',
    ],

    'beatmaps' => [
        '_' => 'Beatmaps',
        'download' => 'Λήψη του προτύπου του beatmap',
        'download-na' => 'Το πρότυπο του beatmap δεν είναι ακόμη διαθέσιμο',
    ],

    'index' => [
        'description' => 'Οι επιλεγμένοι καλλιτέχνες είναι καλλιτέχνες με τους οποίους συνεργαζόμαστε για να φέρουμε νέα και πρωτότυπη μουσική στο osu!. Αυτοί οι καλλιτέχνες και κάποια απο τα κομμάτια τους έχουν επιλεχθεί ειδικά από την ομάδα του osu! ώστε να είναι ευχάριστα στην ακρόαση και ιδανικά για mapping. Κάποιοι από αυτούς τους καλλιτέχνες έχουν επίσης δημιουργήσει καινούργια κομμάτια αποκλειστικά για το osu!.<br><br>Όλα τα τραγούδια σε αυτή την κατηγορία παρέχονται ως αρχεία .osz με προκαθορισμένο timing και επίσημα έχουν την άδεια να χρησιμοποιηθούν στο osu! και σε περιεχόμενο γύρω από αυτό.',
    ],

    'links' => [
        'beatmaps' => 'osu! Beatmaps',
        'osu' => 'osu! προφίλ',
        'site' => 'Επίσημη Ιστοσελίδα',
    ],

    'songs' => [
        '_' => 'Τραγούδια',
        'count' => ':count τραγούδι|:count τραγούδια',
        'original' => 'osu! original',
        'original_badge' => 'ΠΡΩΤΟΤΥΠΟ',
    ],

    'tracklist' => [
        'title' => 'τίτλος',
        'length' => 'διάρκεια',
        'bpm' => 'bpm',
        'genre' => 'είδος',
    ],

    'tracks' => [
        'index' => [
            '_' => 'αναζήτηση κομματιών',

            'exclusive_only' => [
                'all' => 'Όλα',
                'exclusive_only' => 'osu! original',
            ],

            'form' => [
                'advanced' => 'Σύνθετη Αναζήτηση',
                'album' => 'Άλμπουμ',
                'artist' => 'Καλλιτέχνης',
                'bpm_gte' => 'Ελάχιστο BPM',
                'bpm_lte' => 'Μέγιστο BPM',
                'empty' => 'Δεν βρέθηκαν κομμάτια που να ταιριάζουν με τα κριτήρια αναζήτησης.',
                'exclusive_only' => 'Τύπος',
                'genre' => 'Είδος',
                'genre_all' => 'Όλα',
                'length_gte' => 'Ελάχιστο Μήκος',
                'length_lte' => 'Μέγιστο Μήκος',
            ],
        ],
    ],
];
