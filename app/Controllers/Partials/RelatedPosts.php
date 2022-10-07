<?php

namespace App\Controllers\Partials;

use WP_Query;

trait RelatedPosts
{
    public function relatedPosts()
    {
        global $post;

        $categories     = get_the_category($post->ID);
        $categorie_list = '';

        foreach ($categories as $category) {
            $categorie_list .= $category->cat_ID . ',';
        }

        $args = [
            'posts_per_page' => 2,
            'post__not_in'   => array($post->ID),
            'orderby'        => 'rand', // Randomize the results
            'cat'            => $categorie_list, // Select posts in the same categories
        ];

        return new WP_Query($args);
    }
}
