<?php

/**
 * Create  taxonomies of post types.
 *
 * @see register_post_type() for registering custom post types.
 */
function cod_cpt_tax()
{


    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x('Topics', 'taxonomy general name', 'cod'),
        'singular_name'              => _x('Topics', 'taxonomy singular name', 'cod'),
        'search_items'               => __('Search Topics', 'cod'),
        'popular_items'              => __('Popular Topics', 'cod'),
        'all_items'                  => __('All Topics', 'cod'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Topic', 'cod'),
        'update_item'                => __('Update Topic', 'cod'),
        'add_new_item'               => __('Add New Topic', 'cod'),
        'new_item_name'              => __('New Topic Name', 'cod'),
        'separate_items_with_commas' => __('Separate Topic with commas', 'cod'),
        'add_or_remove_items'        => __('Add or remove Topic', 'cod'),
        'choose_from_most_used'      => __('Choose from the most used Topic', 'cod'),
        'not_found'                  => __('No Topic found.', 'cod'),
        'menu_name'                  => __('Topics', 'cod'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'public'                     => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('slug' => 'learn')
    );

    register_taxonomy('topics', 'learning', $args);
}

// hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'cod_cpt_tax', 0);

function resources_cpt_generating_rule($wp_rewrite) {
    $rules = array();

    $terms = get_terms( array(
        'taxonomy' => 'topics',
        'hide_empty' => false,
    ) );
   
    $post_type = 'learning';
    foreach ($terms as $term) {    
                
        $rules['learn/' . $term->slug . '/([^/]*)$'] = 'index.php?post_type=' . $post_type. '&learning=$matches[1]&name=$matches[1]';
                        
    }
    

    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
    
}
add_filter('generate_rewrite_rules', 'resources_cpt_generating_rule');

function change_link( $permalink, $post ) {
    
    if( $post->post_type == 'learning' ) {
        $resource_terms = get_the_terms( $post, 'topics' );
        $term_slug = '';
        if( ! empty( $resource_terms ) ) {
            foreach ( $resource_terms as $term ) {

                // The featured resource will have another category which is the main one
                if( $term->slug == 'featured' ) {
                    continue;
                }

                $term_slug = $term->slug;
                break;
            }
           
        }
        $permalink = get_home_url() ."/learn/" . $term_slug . '/' . $post->post_name;
    }
    return $permalink;

}
add_filter('post_type_link',"change_link",10,2);



