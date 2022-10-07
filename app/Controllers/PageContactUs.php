<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageContactUs extends Controller
{
    public function title()
    {
        return get_field('opt_title');
    }

    public function schedule()
    {
        return get_field('opt_schedule');
    }

    public function schedule_title()
    {
        $data = self::schedule();

        return $data['title'];
    }

    public function schedule_url()
    {
        $data = self::schedule();

        return $data['url'];
    }

    public function live_chat()
    {
        return get_field('opt_livechat');
    }

    public function live_chat_title()
    {
        $data = self::live_chat();

        return $data['title'];
    }

    public function docs()
    {
        return get_field('opt_docs');
    }

    public function docs_title()
    {
        $data = self::docs();

        return $data['title'];
    }

    public function docs_url()
    {
        $data = self::docs();

        return $data['url'];
    }

    public function branches()
    {
        return get_field('branches');
    }
}
