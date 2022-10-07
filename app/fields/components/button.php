<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$button = new FieldsBuilder('button');

$button
  ->addText('label', ['wrapper' => $config->wrapper])
    ->setInstructions('Label shown on the button.')

  ->addPageLink('url', ['label' => 'URL', 'wrapper' => $config->wrapper])
    ->setInstructions('Link to');

return $button;