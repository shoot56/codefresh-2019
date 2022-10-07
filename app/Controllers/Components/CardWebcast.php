<?php

namespace App\Controllers\Components;

trait CardWebcast
{
    public static function cardTags()
    {
        return wp_get_post_terms(get_the_ID(), 'events_tag', ['fields' => 'names']);
    }

    public static function cardLinkLabel()
    {
        return get_field('link_label') ?? __('Watch here', 'codefresh');
    }

    public static function cardThumbnailURL()
    {
        return get_field('img');
    }
}
