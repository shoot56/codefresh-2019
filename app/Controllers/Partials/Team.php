<?php

namespace App\Controllers\Partials;

use WP_Query;

trait Team
{
    public function team()
    {
        $args = [
            'post_type'      => 'team',
            'order'          => 'ASC',
            'posts_per_page' => -1,
            'meta_key'       => 'cf_team_leader',
            'meta_value'     => true,
        ];

        return new WP_Query($args);
    }
}
