<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$plan_pro = new FieldsBuilder('plan_pro');

$plan_pro
    ->addTab('pro', ['placement' => 'top', 'label' => 'Pro'])
      ->addGroup('pro_resources', ['label' => 'Resources'])
        ->addFields(get_field_partial('components.pricing-resources'))
      ->endGroup()
      ->addRepeater('features_pro', ['label' => 'Features List'])
        ->addTrueFalse('title', ['ui' => true, 'wrapper' => ['width' => '20']])
        ->addText('feature')
      ->endRepeater();

return $plan_pro;
