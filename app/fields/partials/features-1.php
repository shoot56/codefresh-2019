<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$features_1 = new FieldsBuilder('features_1');

$features_1
    ->addTab('Section 1')
      ->addText('s1_title', ['label' => 'Title'])
      ->addWysiwyg('s1_subtitle', ['label' => 'Subtitle', 'media_upload' => 0])
      ->addImage('s1_img', ['label' => 'Image']);

return $features_1;
