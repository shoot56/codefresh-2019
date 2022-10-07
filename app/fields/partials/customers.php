<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$customers = new FieldsBuilder('customers');

$customers
    ->addTab('general', ['placement' => 'top'])
        ->addTrueFalse('customers', ['label' => 'Display Customers', 'ui' => true])
          ->setDefaultValue(true)
        ->addTrueFalse('signup', ['label' => 'Display SignUp Options', 'ui' => true])
          ->setDefaultValue(false);

return $customers;
