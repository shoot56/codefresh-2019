<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageCareerListing extends Controller
{
    public function isSingle()
    {
        return isset($_GET['gh_jid']) ? true : false;
    }
}
