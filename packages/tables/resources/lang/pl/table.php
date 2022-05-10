<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Szukaj',
            'placeholder' => 'Szukaj',
        ],

    ],

    'pagination' => [

        'label' => 'Paginacja',

        'overview' => 'Pozycje od :first do :last z :total łącznie',

        'fields' => [

            'records_per_page' => [
                'label' => 'na stronę',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Przejdź do strony :page',
            ],

            'next' => [
                'label' => 'Następna',
            ],

            'previous' => [
                'label' => 'Poprzednia',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filtr',
        ],

        'open_actions' => [
            'label' => 'Otwórz akcje',
        ],

        'toggle_columns' => [
            'label' => 'Wybierz kolumny',
        ],

    ],

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => 'Czy na pewno chcesz to zrobić?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Anuluj',
                ],

                'confirm' => [
                    'label' => 'Potwierdź',
                ],

                'submit' => [
                    'label' => 'Zatwierdź',
                ],

            ],

        ],

        'replicate' => [

            'label' => 'Powiel',

            'messages' => [
                'replicated' => 'Rekord powielony',
            ],

        ],

    ],

    'empty' => [
        'heading' => 'Nie znaleziono wyników',
    ],

    'filters' => [

        'buttons' => [

            'reset' => [
                'label' => 'Zresetuj filtry',
            ],

            'close' => [
                'label' => 'Zamknij',
            ],

        ],

        'multi_select' => [
            'placeholder' => 'Wszystkie',
        ],

        'select' => [
            'placeholder' => 'Wszystkie',
        ],

    ],

    'selection_indicator' => [

        'selected_count' => '{1} 1 rekord zaznaczony.|[2,*] Zaznaczono rekordów: :count.',

        'buttons' => [

            'select_all' => [
                'label' => 'Zaznacz wszystkie :count',
            ],

            'deselect_all' => [
                'label' => 'Odznacz wszystkie',
            ],

        ],

    ],

];
