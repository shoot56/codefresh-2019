<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageEbooks extends Controller
{
    public function ebooks()
    {
        $args = [
            'post_type'      => 'ebooks',
            'order'          => 'DESC',
            'posts_per_page' => -1,
        ];

        return new WP_Query($args);
    }
}
