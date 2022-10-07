<?php

namespace App\Controllers\Partials;

trait Newsletter
{
    public function newsletterDisabled()
    {
        return get_field('cf_disable_newsletter');
    }

    public function newsletterTitle()
    {
        return __('Stay up to date', 'codefresh');
    }

    public function newsletterBody()
    {
        return __('Subscribe to receive the latest Codefresh news and updates straight to your inbox!', 'codefresh');
    }
}
