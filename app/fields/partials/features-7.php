<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
    'wrapper_sm' => ['width' => 20],
];

$features_7 = new FieldsBuilder('features_7');

$features_7
    ->addTab('Section 7')
        ->addWysiwyg('s7_header', ['label' => 'Header', 'media_upload' => 0])
        ->addRepeater('s7_features', ['label' => 'Features'])
            ->addImage('icon', ['label' => 'Icon', 'return_format' => 'id', 'wrapper' => $config->wrapper])
            ->addText('title')
            ->addWysiwyg('text', ['media_upload' => 0])
        ->endRepeater()
        ->addWysiwyg('s7_sub_header', ['label' => 'Subheader', 'media_upload' => 0])
        ->addRepeater('s7_sub_features', ['label' => 'Sub Features'])
            ->addImage('img', ['label' => 'Image', 'return_format' => 'id', 'wrapper' => $config->wrapper])
            ->addText('title')
            ->addWysiwyg('text', ['media_upload' => 0])
            ->addButtonGroup('side', ['label' => 'Image Side', 'choices' => ['left' => 'Left', 'right' => 'Right']])
        ->endRepeater()
        ->addLink('s7_link', ['label' => 'Button']);

return $features_7;
