<?php

namespace App\Controllers\Components;

trait CardCaseStudy
{
    public static function hasVideo()
    {
        return get_field('cs_only_video');
    }

    public static function video()
    {
        return get_field('cs_video');
    }

    public static function logo()
    {
        return get_field('cs_customer_logo');
    }

    public static function logoHeight()
    {
        $height = get_field('cs_customer_logo_size_card');

        if ($height) {
            return $height . 'px';
        } else {
            return '90%';
        }
    }

    public static function headerTitle()
    {
        return get_field('cs_main_heading');
    }

    public static function body()
    {
        return get_field('cs_excerpt');
    }

    public static function target()
    {
        return self::hasVideo() ? 'foobox' : '_self';
    }

    public static function to()
    {
        if (self::hasVideo() && self::video()) {
            return self::video();
        } else {
            return get_the_permalink();
        }
    }

    public static function linkLabel()
    {
        return self::hasVideo() ? __('Watch the video', 'codefresh') : __('Read the story', 'codefresh');
    }

    public static function cardDetails()
    {
        return [
            'logo'        => self::logo(),
            'logo_height' => self::logoHeight(),
            'has_video'   => self::hasVideo(),
            'video'       => self::video(),
            'title'       => self::headerTitle(),
            'body'        => self::body(),
            'to'          => self::to(),
            'target'      => self::target(),
            'link_label'  => self::linkLabel(),
        ];
    }
}
