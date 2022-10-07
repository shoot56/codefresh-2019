<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
    'wrapper_sm' => ['width' => 20],
];

$features_5 = new FieldsBuilder('features_5');

$features_5
    ->addTab('Section 5')
        // ->addText('s5_header', ['label' => 'Header'])
        // ->addText('s5_title', ['label' => 'Title'])
        // ->addTextarea('s5_subtitle', ['label' => 'Subtitle'])
        // ->addWysiwyg('s5_text', ['label' => 'Text', 'media_upload' => 0])

        // ->addRepeater('s5_features', ['label' => 'Features'])
        //     ->addImage('icon', ['wrapper' => ['width' => 20]])
        //     ->addWysiwyg('desc', ['lable' => 'Description'])
        // ->endRepeater()

        ->addGroup('enterprise_feat', ['label' => 'Enterprise Feature List'])
            ->addRepeater('s5_features', ['label' => 'Features'])
                ->addText('item')
            ->endRepeater()
        ->endGroup()

        ->addGroup('s5_link_1', ['label' => 'Link'])

            ->addTrueFalse('show', ['ui' => $config->ui, 'label' => 'Show Link', 'wrapper' => $config->wrapper_sm])

            ->addLink('link', ['wrapper' => $config->wrapper])
                ->setInstructions('Link to page')

        ->endGroup()

        ->addGroup('s5_link_2', ['label' => 'Link'])

            ->addTrueFalse('show', ['ui' => $config->ui, 'label' => 'Show Link', 'wrapper' => $config->wrapper_sm])

            ->addLink('link', ['wrapper' => $config->wrapper])
                ->setInstructions('Link to page')

        ->endGroup();

return $features_5;
