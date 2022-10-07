<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$calendly = new FieldsBuilder('calendly');

$calendly
    ->addUrl('calendly_user', ['label' => 'Calendly User Url']);

return $calendly;
