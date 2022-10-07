<?php

namespace App\Controllers\Components;

trait FeatureTwoColumn
{
    public static function featureData($item, $index)
    {
        return [
            'index'   => $index,
            'icon'    => $item['icon'],
            'image'   => $item['image'],
            'content' => $item['content'],
        ];
    }
}
