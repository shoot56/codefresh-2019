<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageEvents extends Controller
{
    use Components\CardEvent;

    public $current_date;

    public function __before()
    {
        $this->current_date = current_time('Ymd');
    }

    public function events()
    {
        $args = array(
            'post_type'      => 'events',
            'posts_per_page' => -1,
            'meta_key'       => 'date_time',
            'orderby'        => 'meta_value',
            'order'          => 'ASC',
            'meta_query'     => array(
                array(
                    'key'     => 'date_time',
                    'value'   => $this->current_date,
                    'compare' => '>=',
                    'type'    => 'DATE',
                ),
            ),
        );

        $events = new WP_Query($args);

        return $events;
    }

    public function webcasts()
    {
        $args = array(
            'post_type'      => 'events',
            'posts_per_page' => 10,
            'meta_query'     => array(
                'relation' => 'AND',
                array(
                    'key'     => 'date_time',
                    'value'   => $this->current_date,
                    'compare' => '<=',
                    'type'    => 'DATE',
                ),
                array(
                    'key'   => 'on_demand',
                    'value' => true,
                ),
            ),
        );

        $webcasts = new WP_Query($args);

        return $webcasts;
    }
}
