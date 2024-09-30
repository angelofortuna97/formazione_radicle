<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Post types to be registered with Extended CPTs
    | <https://github.com/johnbillion/extended-cpts>
    |
    */

    'post_types' => [
        'home_cards' => [
            'menu_icon' => 'dashicons-admin-home',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'names' => [
                'singular' => 'Home Card',
                'plural' => 'Home Cards',
                'slug' => 'home_card',
            ],
            'fields' => [
                [
                    'key' => 'field_home_card_title',
                    'label' => 'Title',
                    'name' => 'home_card_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_home_card_description',
                    'label' => 'Description',
                    'name' => 'home_card_description',
                    'type' => 'textarea',
                ],
                [
                    'key' => 'field_home_card_external_link',
                    'label' => 'External Link',
                    'name' => 'home_card_external_link',
                    'type' => 'url',
                ],
            ],
        ],
        'custom_component' => [
            'menu_icon' => 'dashicons-admin-plugins',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'names' => [
                'singular' => 'Custom component',
                'plural' => 'Custom components',
                'slug' => 'custom_component',
            ],
            'fields' => [
                [
                    'key' => 'field_custom_title',
                    'label' => 'Titolo #',
                    'name' => 'custom_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_custom_description',
                    'label' => 'Description #',
                    'name' => 'custom_description',
                    'type' => 'textarea',
                ],
            ],
        ],
        'test_types' => [
            'menu_icon' => 'dashicons-admin-links',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'names' => [
                'singular' => 'Test component',
                'plural' => 'Test components',
                'slug' => 'test_component',
            ],
            'fields' => [
                [
                    'key' => 'field_custom_title',
                    'label' => 'Titolo #',
                    'name' => 'custom_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_custom_description',
                    'label' => 'Description #',
                    'name' => 'custom_description',
                    'type' => 'textarea',
                ],
            ],
        ],
        'seed' => [
            'menu_icon' => 'dashicons-star-filled',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'names' => [
                'singular' => 'Seed',
                'plural' => 'Seeds',
                'slug' => 'seeds',
            ],
            'fields' => [
                [
                    'key' => 'field_product_title',
                    'label' => 'Title',
                    'name' => 'product_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_product_description',
                    'label' => 'Description',
                    'name' => 'product_description',
                    'type' => 'textarea',
                ],
                [
                    'key' => 'field_product_external_link',
                    'label' => 'External Link',
                    'name' => 'product_external_link',
                    'type' => 'url',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Taxonomies to be registered with Extended CPTs library
    | <https://github.com/johnbillion/extended-cpts>
    |
    */

    'taxonomies' => [
        'seed_category' => [
            'post_types' => ['seed'],
            'meta_box' => 'radio',
            'names' => [
                'singular' => 'Category',
                'plural' => 'Categories',
            ],
        ],
    ],
];
