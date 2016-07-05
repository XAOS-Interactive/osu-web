<?php

/**
 *    Copyright 2016 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed in the hopes of
 *    attracting more community contributions to the core ecosystem of osu!
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'login' => [
        '_' => 'Inloggen',
        'username' => 'Gebruikernaam',
        'password' => 'Wachtwoord',
        'button' => 'Inloggen',
        'remember' => 'Onthoud deze computer',
        'title' => 'Log in om verder te gaan',
        'failed' => 'Verkeerde login',
        'register' => 'Heb je geen osu! account? Maak een nieuwe',
        'forgot' => 'Wachtwoord vergeten?',
        'beta' => [
            'main' => 'Beta toegang is alleen voor bepaalde gebruikers.',
            'small' => '(supporters krijgen binnenkort toegang)',
        ],

        'here' => 'hier', // this is substituted in when generating a link above. change it to suit the language.
    ],
    'anonymous' => [
        'login_link' => 'klik om in te loggen',
        'username' => 'Gast',
        'error' => 'Je moet ingelogd zijn om dit te doen.',
    ],
    'logout_confirm' => 'Weet je zeker dat je wilt uitloggen? :(',
    'show' => [
        '404' => 'Gebruiker niet gevonden! ;_;',
        'current_location' => 'Momenteel in :location.',
        'edit' => [
            'cover' => [
                'button' => 'Verander Profiel Cover',
                'defaults_info' => 'In de toekomst zullen er meer cover opties beschikbaar zijn',
                'upload' => [
                    'broken_file' => 'Afbeelding verwerken mislukt. Controleer de geüploade afbeelding en probeer opnieuw.',
                    'button' => 'Upload afbeelding',
                    'dropzone' => 'Drop hier om te uploaden',
                    'dropzone_info' => 'Je kunt je afbeelding ook hier droppen om te uploaden',
                    'restriction_info' => "Uploaden alleen beschikbaar voor <a href='".config('osu.urls.support-the-game')."' target='_blank'>osu!supporters</a>",
                    'size_info' => 'Cover grootte moet 2700x500 zijn',
                    'too_large' => 'Het geüploade bestand is te groot.',
                    'unsupported_format' => 'Niet ondersteund formaat.',
                ],
            ],
        ],
        'extra' => [
            'achievements' => [
                'title' => 'Prestaties',
                'achieved-on' => 'Behaald op :date',
            ],
            'beatmaps' => [
                'title' => 'Beatmaps',
            ],
            'historical' => [
                'empty' => 'Geen prestatiegegevens. :(',
                'most_played' => [
                    'count' => 'keer gespeeld',
                    'title' => 'Meest Gespeelde Beatmaps',
                ],
                'recent_plays' => [
                    'accuracy' => 'precisie: :percentage',
                    'title' => 'Recent gespeeld',
                ],
                'title' => 'Historisch',
            ],
            'performance' => [
                'title' => 'Prestatie',
            ],
            'kudosu' => [
                'available' => 'Kudosu Beschikbaar',
                'available_info' => 'Kudosu kunnen omgeruild worden voor kudosu sterren, deze zorgen ervoor dat je beatmap meer aandacht krijgt. Dit is het aantal kudosu dat je nog niet omgeruild hebt.',
                'entry' => [
                    'empty' => 'Deze gebruiker heeft nog geen kudosu ontvangen!',
                    'give' => '<strong class="kudosu-entries__amount">:amount kudosu</strong> ontvangen van :giver voor :post',
                    'revoke' => 'Kudosu geweigerd door :giver voor :post',
                ],
                'recent_entries' => 'Recente Kudosu Geschiedenis',
                'title' => 'Kudosu!',
                'total' => 'Totaal Aantal Kudosu Verdiend',
                'total_info' => 'Gebaseerd op hoeveel contributie de gebruiker heeft geleverd aan beatmap moderatie. Zie <a href="'.config('osu.urls.user.kudosu').'">deze pagina</a> voor meer informatie.',
            ],
            'me' => [
                'title' => 'ik!',
            ],
            'medals' => [
                'title' => 'Medailles',
            ],
            'recent_activities' => [
                'title' => 'Recent',
            ],
            'top_ranks' => [
                'best' => [
                    'title' => 'Beste Prestatie',
                ],
                'empty' => 'Nog geen geweldige prestatiegegevens. :(',
                'first' => [
                    'title' => 'Eerste Ranks',
                ],
                'pp' => ':amountpp',
                'title' => 'Ranks',
                'weighted_pp' => 'gewogen: :pp (:percentage)',
            ],
            'beatmaps' => [
                'title' => 'Beatmaps',
                'favourite' => [
                    'title' => 'Favoriete Beatmaps (:count)',
                ],
                'ranked_and_approved' => [
                    'title' => 'Gerankte & Goedgekeurde Beatmaps (:count)',
                ],
                'none' => 'Nog geen...',
            ],
        ],
        'first_members' => 'hier sinds het begin',
        'is_supporter' => 'osu!supporter',
        'is_developer' => 'osu!developer',
        'lastvisit' => 'Laatst gezien op :date.',
        'joined_at' => 'werd lid op :date',
        'more_achievements' => 'en meer',
        'origin' => [
            'age' => ':age jaar oud.',
            'country' => 'Uit :country.',
            'country_age' => ':age jaar oud uit :country.',
        ],
        'page' => [
            'description' => '<strong>ik!</strong> is een persoonlijk bewerkbaar gedeelte van je profiel.',
            'edit_big' => 'Bewerk me!',
            'placeholder' => 'Typ pagina inhoud hier',
            'restriction_info' => "Je moet een <a href='".config('osu.urls.support-the-game')."' target='_blank'>osu!supporter</a> zijn om dit te gebruiken.",
        ],
        'plays_with' => [
            '_' => 'Speelt met',
            'keyboard' => 'Toetsenbord',
            'mouse' => 'Muis',
            'tablet' => 'Tablet',
            'touch' => 'Touch Screen',
        ],
        'missingtext' => 'Je hebt misschien een typfout gemaakt! (of de gebruiker is verbannen)',
        'page_description' => 'osu! - Alles wat je ooit over :username wilde weten!',
        'rank' => [
            'country' => 'Landelijke rank voor :mode',
            'global' => 'Globale rank voor :mode',
        ],
        'stats' => [
            'hit_accuracy' => 'Hit Precisie',
            'level' => 'Level :level',
            'maximum_combo' => 'Maximum Combo',
            'play_count' => 'Play Count',
            'ranked_score' => 'Gerankte Score',
            'replays_watched_by_others' => 'Replays Gekeken door Anderen',
            'score_ranks' => 'Score Ranks',
            'total_hits' => 'Totaal Aantal Hits',
            'total_score' => 'Totaal Aantal Score',
        ],
        'title' => 'Profiel van :username',
    ],

];