<?php

namespace App\Controllers;

use App;
use Sober\Controller\Controller;

class TemplateIntegration extends Controller
{
    public function body()
    {
        return get_field('hero_body');
    }

    public function heroButtons()
    {
        return get_field('hero_buttons');
    }

    public function sectionOneFeatures()
    {
        return get_field('section_1_features');
    }

    public function sectionTwoTitle()
    {
        return get_field('section_2_title');
    }

    public function sectionTwoImage()
    {
        return get_field('section_2_image');
    }

    public function sectionTwoFeatures()
    {
        return get_field('section_2_features');
    }

    public function sectionThreeTitle()
    {
        return get_field('section_3_title');
    }

    public function sectionThreeFeatures()
    {
        return get_field('section_3_features');
    }

    public function iframe()
    {
        $iframe = get_field('section_4_video');

        return App\video_iframe($iframe);
    }

    public function ctaTitle()
    {
        return get_field('cta_title');
    }

    public function ctaLink()
    {
        $acf_link = get_field('cta_link');
        return App\_link($acf_link);
    }

    public function blog()
    {
        return [
            'is_custom'    => get_field('blog_custom'),
            'category'     => get_field('blog_taxonomy'),
            'custom_posts' => get_field('blog_custom_posts'),
        ];
    }

    public function blogPosts()
    {
        $is_custom    = get_field('blog_custom');
        $category     = get_field('blog_taxonomy');
        $numberposts  = get_field('blog_number_of_posts') ?? 3;
        $custom_posts = get_field('blog_custom_posts');

        if ($is_custom) {
            return $custom_posts;
        }

        if (!$category) {
            return [];
        }

        $args = [
            'post_type'   => 'post',
            'order'       => 'DESC',
            'cat'         => $category,
            'numberposts' => $numberposts,
        ];

        $posts = get_posts($args);

        return $posts;
    }
}
