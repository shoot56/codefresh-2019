<?php
namespace App\Includes\CPT;

class MeetCodefreshers
{

    public static $post_type_name = 'meet-a-codefresher';
    public static $post_type_slug = 'meet-a-codefresher';

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
            'name'                  => _x('Meet a Codefresher', 'Post Type General Name', 'codefresh'),
            'singular_name'         => _x('Meet a Codefresher', 'Post Type Singular Name', 'codefresh'),
            'menu_name'             => __('Meet a Codefresher', 'codefresh'),
            'name_admin_bar'        => __('Meet a Codefresher', 'codefresh'),
            'archives'              => __('Meet a Codefresher Archives', 'codefresh'),
            'attributes'            => __('Meet a Codefresher Attributes', 'codefresh'),
            'parent_item_colon'     => __('Parent Meet a Codefresher:', 'codefresh'),
            'all_items'             => __('All Meet a Codefresher', 'codefresh'),
            'add_new_item'          => __('Add New Meet a Codefresher', 'codefresh'),
            'add_new'               => __('Add New', 'codefresh'),
            'new_item'              => __('New Meet a Codefresher', 'codefresh'),
            'edit_item'             => __('Edit Meet a Codefresher', 'codefresh'),
            'update_item'           => __('Update Meet a Codefresher', 'codefresh'),
            'view_item'             => __('View Meet a Codefresher', 'codefresh'),
            'view_items'            => __('View Meet a Codefresher', 'codefresh'),
            'search_items'          => __('Search Meet a Codefresher', 'codefresh'),
            'not_found'             => __('Not found', 'codefresh'),
            'not_found_in_trash'    => __('Not found in Trash', 'codefresh'),
            'featured_image'        => __('Featured Image', 'codefresh'),
            'set_featured_image'    => __('Set featured image', 'codefresh'),
            'remove_featured_image' => __('Remove featured image', 'codefresh'),
            'use_featured_image'    => __('Use as featured image', 'codefresh'),
            'insert_into_item'      => __('Insert into ' . self::$post_type_name, 'codefresh'),
            'uploaded_to_this_item' => __('Uploaded to this Meet a Codefresher', 'codefresh'),
            'items_list'            => __('Meet a Codefresher list', 'codefresh'),
            'items_list_navigation' => __('Meet a Codefresher list navigation', 'codefresh'),
            'filter_items_list'     => __('Filter items list', 'codefresh'),
        ];

        $args = [
            'label'              => __('Meet a Codefresher', 'codefresh'),
            'description'        => __('Codefresher stories', 'codefresh'),
            'labels'             => $labels,
            'supports'           => ['title', 'thumbnail', 'editor', 'author', 'excerpt'],
            'public'             => true,
            'has_archive'        => true,
            'publicly_queryable' => true,
            'menu_position'      => 5,
            'show_in_rest'       => true,
            'rewrite'            => [
                'slug' => self::$post_type_slug,
            ],
            'menu_icon'          => 'dashicons-groups',
        ];

        register_post_type(self::$post_type_name, $args);
    }

}

new MeetCodefreshers();
