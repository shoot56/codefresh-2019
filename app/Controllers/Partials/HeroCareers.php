<?php

namespace App\Controllers\Partials;

trait HeroCareers
{
    public function heroTitle()
    {
        return get_field('cf_careers_title');
    }

    public function heroSubtitle()
    {
        return get_field('cf_careers_subtitle');
    }

    public function heroBtnLabel()
    {
        return get_field('cf_careers_btn_label') ?? __('See Current Openings', 'codefresh');
    }

    public function heroImgId()
    {
        return get_field('cf_careers_image');
    }
}
