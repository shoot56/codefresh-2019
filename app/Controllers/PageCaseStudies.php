<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageCaseStudies extends Controller
{
    use Components\CardCaseStudy;

    public function mainVideo()
    {
        return get_field('cs_video') ?? false;
    }

    public function headline()
    {
        return get_field('short_headline');
    }

    public function title()
    {
        return get_field('heading');
    }

    public function subtitle()
    {
        return get_field('text');
    }

    public function caseStudies()
    {
        $args = [
            'post_type'      => 'case-studies',
            'order'          => 'DESC',
            'posts_per_page' => -1,
        ];

        $query = new WP_Query($args);

        return $query;
    }

    public function customersCarousel()
    {
        return get_field('customers_carousel', 'option');
    }
}
