<?php

namespace App\Controllers;

use App;
use Sober\Controller\Controller;

class PageCareers extends Controller
{
    use Partials\HeroCareers;

    public function mainTitle()
    {
        return get_field('cf_careers_intro_title');
    }

    public function mainBody()
    {
        return get_field('cf_careers_intro_text');
    }

    public function jobListingTitle()
    {
        return get_field('cf_careers_job_listings_title');
    }

    public function jobListingBody()
    {
        return get_field('cf_careers_job_listings_text');
    }

    public function valuesTitle()
    {
        return get_field('cf_careers_values_title');
    }

    public function valuesSubtitle()
    {
        return get_field('cf_careers_values_subtitle');
    }

    public function valuesBody()
    {
        return get_field('cf_careers_values_text');
    }

    public function valuesRep()
    {
        return get_field('cf_careers_values_rep');
    }

    public function carousel()
    {
        return get_field('cf_careers_intro_carousel');
    }

    public function testimonials()
    {
        return get_field('cf_testimonials_rep');
    }

    public function gradients()
    {
        return [
            'bg-gradient-radial-primary',
            'bg-gradient-radial-blue',
            'bg-gradient-radial-primary',
            'bg-gradient-radial-blue',
        ];
    }

    public function testimonialsLink()
    {
        $link = get_field('cf_testimonials_link');
        return App\acf_link($link);
    }
}
