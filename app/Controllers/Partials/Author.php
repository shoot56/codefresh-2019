<?php

namespace App\Controllers\Partials;

trait Author
{
    public static function authorId()
    {
        return get_the_author_meta('ID');
    }

    public static function authorName()
    {
        return get_the_author_meta('display_name');
    }

    public static function authorDescription()
    {
        return get_the_author_meta('description');
    }
}
