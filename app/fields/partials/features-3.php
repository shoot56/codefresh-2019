<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 1,
  'wrapper' => ['width' => 30],
  'wrapper_sm' => ['width' => 20],
];

$features_3 = new FieldsBuilder('features_3');

$features_3
    ->addTab('Section 3')
        ->addWysiwyg('s3_title', ['label' => 'Title'])
        ->addRepeater('s3_features', ['label' => 'Features'])
          ->addImage('icon', ['wrapper' => ['width' => 20]])
          ->addWysiwyg('desc', ['label' => 'Description', 'media_upload' => 0])
        ->endRepeater()
        ->addImage('s3_img', ['label' => 'Image'])

        ->addGroup('s3_link', ['label' => 'Link'])
          ->addTrueFalse('show', ['ui' => $config->ui, 'label' => 'Show Link', 'wrapper' => $config->wrapper_sm])
          ->addLink('link', ['wrapper' => $config->wrapper])
            ->setInstructions('Link to page')
        ->endGroup();

return $features_3;
