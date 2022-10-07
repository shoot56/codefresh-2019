<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$feature_single_alt = new FieldsBuilder('feature_single_alt', ['hide_on_screen' => 'slug']);

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$feature_single_alt
    ->setLocation('page_template', '==', 'views/page-features-single-alt.blade.php');

$feature_single_alt
    ->addTab('Hero')
        ->addWysiwyg('hero_content', ['media_upload' => 0])

    ->addTab('Section 1')
        ->addWysiwyg('s1_title')
        ->addRepeater('s1_rep')
            ->addImage('icon', ['preview' => 'thumbnail', 'wrapper' => $config->wrapper ])
            ->addWysiwyg('content', ['media_upload' => 0, 'toolbar' => 'basic'])
        ->endRepeater()
        ->addImage( 's1_img', [ 'label' => 'Image' ] )

    ->addTab('Section 2')
        ->addWysiwyg('s2_title')
        ->addImage('s2_img', [ 'label' => 'Image' ])
        ->addRepeater('s2_rep')
            ->addWysiwyg('content')
        ->endRepeater()

    ->addTab('Section 3')
        ->addWysiwyg('s3_title')
        ->addRepeater('s3_rep')
            ->addImage('icon', [ 'wrapper' => $config->wrapper ])
            ->addText('desc', [ 'label' => 'description' ])
        ->endRepeater()

    ->addTab('Section 4')
        ->addWysiwyg('s4_title')
        ->addRepeater('s4_rep', ['layout' => 'block'])
            ->addWysiwyg('content')
            ->addFields(get_field_partial('components.link'))
            ->addImage('img', [ 'label' => 'Image' ])
        ->endRepeater()

    ->addTab('Section 5')
        ->addWysiwyg('s5_title')
        ->addGroup('s5_button')
            ->addFields(get_field_partial('components.button'))
        ->endGroup();


return $feature_single_alt;
