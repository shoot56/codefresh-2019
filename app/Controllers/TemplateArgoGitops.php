<?php

namespace App\Controllers;

use App;
use Sober\Controller\Controller;

class TemplateArgoGitops extends Controller
{
    public function heroTitle()
    {
        return get_field('hero_title');
    }

    public function heroContent()
    {
        return get_field('hero_content');
    }

    public function featuresTitle()
    {
        return get_field('features_title');
    }

    public function features()
    {
        return get_field('features');
    }

    public function logos()
    {
        return get_field('logos');
    }

    public function heroImage()
    {
        return get_field('hero_image');
    }

    public function section1Title()
    {
        return get_field('s1_title');
    }

    public function section1Content()
    {
        return get_field('s1_content');
    }

    public function section2Title()
    {
        return get_field('s2_title');
    }

    public function section2Content()
    {
        return get_field('s2_content');
    }

    public function section2Image()
    {
        return get_field('s2_image');
    }

    public function section2Link()
    {
        $link = get_field('s2_link');

        return App\acf_link($link);
    }

    public function featuresFooterImage()
    {
        return get_field('features_footer_image');
    }

    public function ctaTitle()
    {
        return get_field('cta_title');
    }

    public function ctaContent()
    {
        return get_field('cta_content');
    }
}
