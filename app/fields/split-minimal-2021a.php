<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$splitMinimal2021a = new FieldsBuilder('splitMinimal2021a', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$splitMinimal2021a
    ->setLocation('page_template', '==', 'views/split-minimal-2021a.blade.php');

$splitMinimal2021a
    ->addWysiwyg('primary_content')
    ->addWysiwyg('secondary_content')
    ->addTrueFalse('show_g2_badges')
        ->setInstructions('Check this box to show featured case studies instead of other content')
    ->addTrueFalse('show_logos')
        ->setInstructions('Check this box to disable the case study logo section')
    ->addTrueFalse('sign_up_links')
        ->setInstructions('Check this box to disable the case study logo section')
    ->addTrueFalse('one_column')
        ->setInstructions('Check this box to use a single column layout')

    ;

return $splitMinimal2021a;
