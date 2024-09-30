<?php

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'home_card_fields',
        'title' => 'Home Card Fields',
        'fields' => [
            [
                'key' => 'card_title',
                'label' => 'Titolo',
                'name' => 'titolo',
                'type' => 'text',
            ],
            [
                'key' => 'card_description',
                'label' => 'Descrizione',
                'name' => 'descrizione',
                'type' => 'textarea',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'home_cards',
                ],
            ],
        ],
    ]);

    acf_add_local_field_group([
        'key' => 'group_1',
        'title' => 'Dettagli Prodotto',
        'fields' => [
            [
                'key' => 'price',
                'label' => 'Prezzo',
                'name' => 'prezzo',
                'type' => 'number',
            ],
            [
                'key' => 'description',
                'label' => 'Descrizione',
                'name' => 'descrizione',
                'type' => 'textarea',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'test_types',
                ],
            ],
        ],
    ]);
}
