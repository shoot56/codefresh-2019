<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageWebcastsOnDemand extends Controller
{
    use Components\CardWebcast;

    public function events()
    {
        $current_page = get_query_var('paged');

        $args = ['post_type' => 'events',
            'posts_per_page'     => 9,
            'paged'              => $current_page,
            'meta_key'           => 'on_demand',
            'meta_value'         => true];

        return new WP_Query($args);
    }
}
