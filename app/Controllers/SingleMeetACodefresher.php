<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class SingleMeetACodefresher extends Controller
{
    public function relatedPosts()
    {
        global $post;

        $args = [
            'post_type'      => 'meet-a-codefresher',
            'posts_per_page' => 4,
            'orderby'        => 'rand',
            'post__not_in'   => array($post->ID),
        ];

        return new WP_Query($args);
    }
}
