<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$lp2021a_minimal = new FieldsBuilder('lp2021a_minimal', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$lp2021a_minimal
    ->setLocation('page_template', '==', 'views/lp-2021a-minimal.blade.php');

$lp2021a_minimal
    ->addTab('Options')
        ->addTrueFalse('bare_page')
            ->setInstructions('Check this box if you only want a hero and a plain white background without decorative elements.')
        ->addTrueFalse('show_hero_section')
            ->setInstructions('Check this box to show the hero section.')

    ->addTab('Hero')
        ->addText('hero_title')
        ->addTextarea('hero_subtitle')
        ->addWysiwyg('hero_video', ['instructions' => 'Please only insert a singular video or image into this section.'])

    ->addTab('CTA Buttons')
        ->addText('cta_primary_button_text')
        ->addText('cta_primary_button_url')

    ->addTab('Main Content')
        ->addWysiwyg('main_content')

    ->addTab('Form')
        ->addTrueFalse('align_heading')
            ->setInstructions('Check this box to left align the heading and subheading.')
        ->addText('form_title')
        ->addText('form_subtitle')
        ->addNumber('form_id')
            ->setInstructions('Please visit <a href="'.admin_url('admin.php?page=gf_edit_forms').'" target="_blank">Forms</a> to find the Form ID.')

    ;

return $lp2021a_minimal;
