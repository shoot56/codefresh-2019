<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$plan_basic = new FieldsBuilder('plan_basic');

$plan_basic
    ->addTab('basic', ['placement' => 'top', 'label' => 'Basic'])
      ->addGroup('basic_resources', ['label' => 'Resources'])
        ->addFields(get_field_partial('components.pricing-resources'))
      ->endGroup()
      ->addRepeater('features_basic', ['label' => 'Features List'])
        ->addTrueFalse('title', ['ui' => true, 'wrapper' => ['width' => '20']])
        ->addText('feature')
      ->endRepeater();

return $plan_basic;
