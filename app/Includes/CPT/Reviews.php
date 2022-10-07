<?php
namespace App\Includes\CPT;

class Reviews {

    public static $post_type_name = 'reviews';
    public static $post_type_slug = 'reviews';

    public function __construct() {

        add_action( 'init', [ $this, 'register_post_type' ] );
    }

    public static function register_post_type() {

        if ( post_type_exists( self::$post_type_name ) ) {
            return;
        }

        $labels = [
            'name'                  => _x( 'Reviews', 'Post Type General Name', 'codefresh' ),
            'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'codefresh' ),
            'menu_name'             => __( 'Reviews', 'codefresh' ),
            'name_admin_bar'        => __( 'Reviews', 'codefresh' ),
            'archives'              => __( 'Review Archives', 'codefresh' ),
            'attributes'            => __( 'Review Attributes', 'codefresh' ),
            'parent_item_colon'     => __( 'Parent Review:', 'codefresh' ),
            'all_items'             => __( 'All Reviews', 'codefresh' ),
            'add_new_item'          => __( 'Add New Review', 'codefresh' ),
            'add_new'               => __( 'Add New', 'codefresh' ),
            'new_item'              => __( 'New Review', 'codefresh' ),
            'edit_item'             => __( 'Edit Review', 'codefresh' ),
            'update_item'           => __( 'Update Review', 'codefresh' ),
            'view_item'             => __( 'View Review', 'codefresh' ),
            'view_items'            => __( 'View Reviews', 'codefresh' ),
            'search_items'          => __( 'Search Review', 'codefresh' ),
            'not_found'             => __( 'Not found', 'codefresh' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'codefresh' ),
            'featured_image'        => __( 'Featured Image', 'codefresh' ),
            'set_featured_image'    => __( 'Set featured image', 'codefresh' ),
            'remove_featured_image' => __( 'Remove featured image', 'codefresh' ),
            'use_featured_image'    => __( 'Use as featured image', 'codefresh' ),
            'insert_into_item'      => __( 'Insert into ' . self::$post_type_name, 'codefresh' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Review', 'codefresh' ),
            'items_list'            => __( 'Reviews list', 'codefresh' ),
            'items_list_navigation' => __( 'Reviews list navigation', 'codefresh' ),
            'filter_items_list'     => __( 'Filter items list', 'codefresh' ),
        ];

        $args = [
            'label'               => __( 'Reviews', 'codefresh' ),
            'description'         => __( 'Post Type Description', 'codefresh' ),
            'labels'              => $labels,
            'supports'            => [ 'title', 'thumbnail', 'editor', 'author' ],
            'public'              => true,
            'has_archive'         => false,
            'publicly_queryable'  => false,
            'menu_position'       => 5,
            'show_in_rest'        => true,
            'rewrite'             => [
                'slug' => self::$post_type_slug,
            ],
            'menu_icon'     => 'dashicons-star-filled',
        ];

        register_post_type( self::$post_type_name, $args );
    }

}

new Reviews();
