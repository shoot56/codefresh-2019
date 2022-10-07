<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$plan_enterprise = new FieldsBuilder('plan_enterprise');

$plan_enterprise
    ->addTab('enterprise', ['placement' => 'top', 'label' => 'Enterprise'])
      ->addRepeater('features_enterprise', ['label' => 'Features List'])
        ->addTrueFalse('title', ['ui' => true, 'wrapper' => ['width' => '20']])
        ->addText('feature')
      ->endRepeater()
      ->addWysiwyg('features_enterprise_extra', ['label' => 'Features Extra', 'media_upload' => 0, 'toolbar' => 'basic']);

return $plan_enterprise;
