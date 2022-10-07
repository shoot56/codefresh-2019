<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$features_2 = new FieldsBuilder('features_2');

$features_2
    ->addTab('Section 2')
        ->addText('s2_header', ['label' => 'Header'])
        ->addText('s2_title', ['label' => 'Title'])
        ->addRepeater('s2_features', ['label' => 'Features'])
          ->addWysiwyg('desc', ['label' => 'Description', 'media_upload' => 0])
        ->endRepeater()
        ->addImage('s2_img', ['label' => 'Image']);

return $features_2;
