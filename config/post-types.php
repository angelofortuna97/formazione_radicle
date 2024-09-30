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
            ]
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
