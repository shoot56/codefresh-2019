<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$pricingResources = new FieldsBuilder('button');

$pricingResources
  ->addTab('Small')
    ->addText('sm_line_1', [ 'label' => 'Line 1' ])
      ->setDefaultValue('1 GB RAM 1 CPU')
    ->addText('sm_line_2', [ 'label' => 'Line 2' ])
      ->setDefaultValue('Up to 2 concurrent steps per build')
  ->addTab('Medium')
    ->addText('md_line_1', [ 'label' => 'Line 1' ])
      ->setDefaultValue('4 GB RAM 2 CPU')
    ->addText('md_line_2', [ 'label' => 'Line 2' ])
      ->setDefaultValue('Up to 4 concurrent steps per build')
  ->addTab('Large')
    ->addText('lg_line_1', [ 'label' => 'Line 1' ])
      ->setDefaultValue('8 GB RAM 4 CPU')
    ->addText('lg_line_2', [ 'label' => 'Line 2' ])
      ->setDefaultValue('Up to 6 concurrent steps per build');

return $pricingResources;