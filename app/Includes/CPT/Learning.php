<?php

namespace App\Includes\CPT;

class Learning
{

    public static $post_type_name = 'learning';
    

    public function __construct()
    {

        add_action('init', [$this, 'register_post_type']);
    }

    public static function register_post_type()
    {

        if (post_type_exists(self::$post_type_name)) {
            return;
        }

        $labels = [
            'name'                  => _x('Learning center', 'Post Type General Name', 'codefresh'),
            'singular_name'         => _x('Learning center', 'Post Type Singular Name', 'codefresh'),
            'menu_name'             => __('Learning center', 'codefresh'),
            'name_admin_bar'        => __('Learning center', 'codefresh'),
            'archives'              => __('Learning center Archives', 'codefresh'),
            'attributes'            => __('Learning center Attributes', 'codefresh'),
            'parent_item_colon'     => __('Parent Learning center:', 'codefresh'),
            'all_items'             => __('All Learning centers', 'codefresh'),
            'add_new_item'          => __('Add New Learning center', 'codefresh'),
            'add_new'               => __('Add New', 'codefresh'),
            'new_item'              => __('New Learning center', 'codefresh'),
            'edit_item'             => __('Edit Learning center', 'codefresh'),
            'update_item'           => __('Update Learning center', 'codefresh'),
            'view_item'             => __('View Learning center', 'codefresh'),
            'view_items'            => __('View Learning centers', 'codefresh'),
            'search_items'          => __('Search Learning center', 'codefresh'),
            'not_found'             => __('Not found', 'codefresh'),
            'not_found_in_trash'    => __('Not found in Trash', 'codefresh'),
            'featured_image'        => __('Featured Image', 'codefresh'),
            'set_featured_image'    => __('Set featured image', 'codefresh'),
            'remove_featured_image' => __('Remove featured image', 'codefresh'),
            'use_featured_image'    => __('Use as featured image', 'codefresh'),
            'insert_into_item'      => __('Insert into ' . self::$post_type_name, 'codefresh'),
            'uploaded_to_this_item' => __('Uploaded to this Learning center', 'codefresh'),
            'items_list'            => __('Learning centers list', 'codefresh'),
            'items_list_navigation' => __('Learning centers list navigation', 'codefresh'),
            'filter_items_list'     => __('Filter items list', 'codefresh'),
        ];

        $args = [
            'label'               => __('Learning centers', 'codefresh'),
            'description'         => __('Post Type Description', 'codefresh'),
            'labels'              => $labels,
            'has_archive' => true,
            'taxonomies' => array('topics'),
            'supports'            => ['title', 'thumbnail'],
            'public'              => true,
            'capability_type' => 'post',
            'query_var' => true,
            'publicly_queryable'  => true,
            'hierarchical' => true,
            'menu_position'       => 5,
            'show_in_rest'        => true,
            'rewrite' => array('slug' => 'learn'),
            'menu_icon'     => 'dashicons-welcome-learn-more',
        ];

        register_post_type(self::$post_type_name, $args);
    }
}

new Learning();
