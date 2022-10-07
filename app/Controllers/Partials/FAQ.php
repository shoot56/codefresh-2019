<?php

namespace App\Controllers\Partials;

use WP_Query;

trait FAQ
{
    public function faq()
    {
        $args = [
            'post_type'      => 'faq',
            'order'          => 'ASC',
            'posts_per_page' => -1,
        ];

        return new WP_Query($args);
    }
}
