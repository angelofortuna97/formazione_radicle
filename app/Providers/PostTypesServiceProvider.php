<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class PostTypesServiceProvider extends ServiceProvider
{
    /**
     * Register post types services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Register the post types assets.
         *
         * @return void
         */
        add_action('init', function (): void {
            Collection::make(config('post-types.post_types'))
                ->each(function ($args, $post_type) {
                    register_extended_post_type(
                        $post_type,
                        $args,
                        Arr::pull($args, 'names')
                    );
                });
        }, 100);

        /**
         * Register the taxonomies.
         *
         * @return void
         */
        add_action('init', function (): void {
            Collection::make(config('post-types.taxonomies'))
                ->each(function ($args, $taxonomy) {
                    register_extended_taxonomy(
                        $taxonomy,
                        Arr::pull($args, 'post_types'),
                        $args,
                        Arr::pull($args, 'names')
                    );
                });
        }, 100);
    }
}


///*namespace App\Providers;
//
//use Illuminate\Support\Arr;
//use Illuminate\Support\Collection;
//use Illuminate\Support\ServiceProvider;
//
//class PostTypesServiceProvider extends ServiceProvider
//{
//    /**
//     * Register post types services.
//     *
//     * @return void
//     */
//    public function register()
//    {
//        /**
//         * Register the post types assets.
//         *
//         * @return void
//         */
//        add_action('init', function (): void {
//            Collection::make(config('post-types.post_types'))
//                ->each(function ($args, $post_type) {
//                    register_extended_post_type(
//                        $post_type,
//                        $args,
//                        Arr::pull($args, 'names')
//                    );
//                });
//        }, 100);
//
//        /**
//         * Register the taxonomies.
//         *
//         * @return void
//         */
//        add_action('init', function (): void {
//            Collection::make(config('post-types.taxonomies'))
//                ->each(function ($args, $taxonomy) {
//                    register_extended_taxonomy(
//                        $taxonomy,
//                        Arr::pull($args, 'post_types'),
//                        $args,
//                        Arr::pull($args, 'names')
//                    );
//                });
//        }, 100);
//
//        $postTypes = config('post-types');
//
//        foreach ($postTypes as $key => $postType) {
//            PostType::make($key, $postType['singular'])
//                ->setOptions($postType['options']);
//        }
//
//        $this->registerACFFields();
//    }
//
//    public function registerACFFields()
//    {
//        if (function_exists('acf_add_local_field_group')) {
//            acf_add_local_field_group([
//                'key' => 'group_custom_component_fields',
//                'title' => 'Custom Component Fields',
//                'fields' => [
//                    [
//                        'key' => 'field_title',
//                        'label' => 'Title',
//                        'name' => 'title',
//                        'type' => 'text',
//                        'instructions' => 'Enter the title.',
//                        'required' => 1,
//                    ],
//                    [
//                        'key' => 'field_description',
//                        'label' => 'Description',
//                        'name' => 'description',
//                        'type' => 'textarea',
//                        'instructions' => 'Enter a short description.',
//                        'required' => 1,
//                    ],
//                    [
//                        'key' => 'field_notes',
//                        'label' => 'Notes',
//                        'name' => 'notes',
//                        'type' => 'textarea',
//                        'instructions' => 'Add any additional notes.',
//                        'required' => 0,
//                    ],
//                ],
//                'location' => [
//                    [
//                        [
//                            'param' => 'post_type',
//                            'operator' => '==',
//                            'value' => 'custom_component',
//                        ],
//                    ],
//                ],
//            ]);
//        }
//    }
//}*/

