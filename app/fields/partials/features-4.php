<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
    'wrapper_sm' => ['width' => 20],
];

$features_4 = new FieldsBuilder('features_4');

$features_4
    ->addTab('Section 4')
        ->addText('s4_header', ['label' => 'Header'])
        ->addText('s4_title', ['label' => 'Title'])
        ->addWysiwyg('s4_subtitle', ['label' => 'Subtitle', 'media_upload' => 0])
        ->addImage('s4_img', ['label' => 'Image'])
        ->addRepeater('s4_features', ['label' => 'Features'])
            ->addImage('icon', ['wrapper' => ['width' => 20]])
            ->addWysiwyg('desc', ['label' => 'Description', 'media_upload' => 0])
        ->endRepeater();

        // ->addGroup('s4_link', ['label' => 'Link'])
        //     ->addTrueFalse('show', ['ui' => $config->ui, 'label' => 'Show Link', 'wrapper' => $config->wrapper_sm])

        //     ->addLink('link', ['wrapper' => $config->wrapper])
        //         ->setInstructions('Link to page')
        // ->endGroup();

return $features_4;
