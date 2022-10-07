<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
    'wrapper_sm' => ['width' => 20],
];

$features_6 = new FieldsBuilder('features_6');

$features_6
    ->addTab('Section 6')
        ->addText('s6_header', ['label' => 'Header'])
        ->addWysiwyg('s6_text', ['label' => 'Description'])
        ->addImage('s6_img', ['label' => 'Image'])
        ->addRepeater('s6_features', ['label' => 'Features'])
            ->addImage('img', ['label' => 'Image', 'wrapper' => $config->wrapper])
            ->addWysiwyg('desc', ['label' => 'Description', 'media_upload' => 0])
        ->endRepeater()
        ->addRepeater('s6_list', ['label' => 'List'])
            ->addText('item');

return $features_6;
