<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$blank = new FieldsBuilder('blank', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$blank
    ->setLocation('page_template', '==', 'views/page-blank.blade.php');

$blank
    ->addTab('Content')
        ->addTextarea('HTML')
        ->addTextarea('CSS')

    ;

return $blank;
