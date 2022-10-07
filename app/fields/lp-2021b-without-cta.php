<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$lp2021b = new FieldsBuilder('lp2021b-without-cta', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$lp2021b
    ->setLocation('page_template', '==', 'views/lp-2021b-without-cta.blade.php');

$lp2021b
    ->addTab('Sections')
      ->addRepeater('sections', ['layout' => 'block', 'collapsed' => 'section_name_without_spaces'])
        ->addRange('BEGIN_NEW_SECTION')
        ->addText('section_name_without_spaces')
        ->addText('background_color')
        ->addText('background_image')
        ->addText('inner_wrap_modifiers')
        ->addNumber('column_count')
        ->addText('grid_gap_size')
        ->addWysiwyg('content')
        ->addTrueFalse('show_separator', ['ui' => '1'])
        ->addText('separator_image')
        ->addText('separator_background')
        ->addTrueFalse('omit_wrappers', ['ui' => '1'])
        ->addTrueFalse('show_featured_case_studies', ['ui' => '1'])
        ->addTrueFalse('show_argo_case_studies', ['ui' => '1'])
        ->addTrueFalse('hide_case_study_logos', ['ui' => '1'])
        ->addTrueFalse('static_logos', ['ui' => '1'])
        ->addTrueFalse('show_integrations', ['ui' => '1'])
      ->endRepeater()

    ;

return $lp2021b;
