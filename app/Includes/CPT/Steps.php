<?php
namespace App\Includes\CPT;

class Steps {

    public static $post_type_name = 'codefresh_steps';
    public static $post_type_slug = 'steps';

    public function __construct() {

        add_action( 'init', [ $this, 'register_post_type' ] );
    }

    public static function register_post_type() {

        if ( post_type_exists( self::$post_type_name ) ) {
            return;
        }

        $labels = [
            'name'                  => _x( 'Codefresh Steps', 'Post Type General Name', 'codefresh' ),
            'singular_name'         => _x( 'Codefresh Step', 'Post Type Singular Name', 'codefresh' ),
            'menu_name'             => __( 'Codefresh Steps', 'codefresh' ),
            'name_admin_bar'        => __( 'Codefresh Steps', 'codefresh' ),
            'archives'              => __( 'Codefresh Step Archives', 'codefresh' ),
            'attributes'            => __( 'Codefresh Step Attributes', 'codefresh' ),
            'parent_item_colon'     => __( 'Parent Codefresh Step:', 'codefresh' ),
            'all_items'             => __( 'All Codefresh Steps', 'codefresh' ),
            'add_new_item'          => __( 'Add New Codefresh Step', 'codefresh' ),
            'add_new'               => __( 'Add New', 'codefresh' ),
            'new_item'              => __( 'New Codefresh Step', 'codefresh' ),
            'edit_item'             => __( 'Edit Codefresh Step', 'codefresh' ),
            'update_item'           => __( 'Update Codefresh Step', 'codefresh' ),
            'view_item'             => __( 'View Codefresh Step', 'codefresh' ),
            'view_items'            => __( 'View Codefresh Steps', 'codefresh' ),
            'search_items'          => __( 'Search Codefresh Step', 'codefresh' ),
            'not_found'             => __( 'Not found', 'codefresh' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'codefresh' ),
            'featured_image'        => __( 'Featured Image', 'codefresh' ),
            'set_featured_image'    => __( 'Set featured image', 'codefresh' ),
            'remove_featured_image' => __( 'Remove featured image', 'codefresh' ),
            'use_featured_image'    => __( 'Use as featured image', 'codefresh' ),
            'insert_into_item'      => __( 'Insert into ' . self::$post_type_name, 'codefresh' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Codefresh Step', 'codefresh' ),
            'items_list'            => __( 'Codefresh Steps list', 'codefresh' ),
            'items_list_navigation' => __( 'Codefresh Steps list navigation', 'codefresh' ),
            'filter_items_list'     => __( 'Filter items list', 'codefresh' ),
        ];

        $args = [
            'label'               => __( 'Codefresh Steps', 'codefresh' ),
            'description'         => __( 'Post Type Description', 'codefresh' ),
            'labels'              => $labels,
            'supports'            => [ 'title', 'thumbnail', 'author' ],
            'public'              => true,
            'has_archive'         => false,
            'publicly_queryable'  => false,
            'menu_position'       => 5,
            'show_in_rest'        => true,
            'rewrite'             => [
                'slug' => self::$post_type_slug,
            ],
            'menu_icon'     => 'dashicons-block-default',
        ];

        register_post_type( self::$post_type_name, $args );
    }

}

new Steps();
