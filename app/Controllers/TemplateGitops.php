<?php

namespace App\Controllers;

use App;
use Sober\Controller\Controller;

class TemplateGitops extends Controller
{
    public function heroTitle()
    {
        return get_field('hero_title');
    }

    public function heroContent()
    {
        return get_field('hero_content');
    }

    public function section1Title()
    {
        return get_field('section_title_1');
    }

    public function section1Subtitle()
    {
        return get_field('section_subtitle_1');
    }

    public function section1Content()
    {
        return get_field('section_content_1');
    }

    public function section2Title()
    {
        return get_field('section_title_2');
    }

    public function section2Subtitle()
    {
        return get_field('section_subtitle_2');
    }

    public function section2Content()
    {
        return get_field('section_content_2');
    }

    public function section3Title()
    {
        return get_field('section_title_3');
    }

    public function section3Subtitle()
    {
        return get_field('section_subtitle_3');
    }

    public function section3Content()
    {
        return get_field('section_content_3');
    }

    public function section4Title()
    {
        return get_field('section_title_4');
    }

    public function section4List()
    {
        return get_field('section_list_4');
    }

    public function section5Title()
    {
        return get_field('section_title_5');
    }

    public function section5Subtitle()
    {
        return get_field('section_subtitle_5');
    }

    public function section5Content()
    {
        return get_field('section_content_5');
    }

    public function section5Image()
    {
        return get_field('section_image_5');
    }

    public function section6Title()
    {
        return get_field('section_title_6');
    }

    public function section6List()
    {
        return get_field('section_list_6');
    }

    public function section6Image()
    {
        return get_field('section_image_6');
    }

    public function section7Title()
    {
        return get_field('section_title_7');
    }

    public function section7Content()
    {
        return get_field('section_content_7');
    }
}
