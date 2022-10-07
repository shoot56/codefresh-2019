<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$form = new FieldsBuilder('form');

$form
    ->addTab('form', ['placement' => 'top'])
        ->addSelect('form_type')
            ->addChoice('gravity_form', 'Gravity Forms')
            ->addChoice('hubspot_form', 'HubSpot')
            ->setDefaultValue('gravity_form')

        ->addTrueFalse('demo_form', ['label' => 'Use Demo Form','ui' => true])
            ->setInstructions('Turn off to select another form')
            ->setDefaultValue(true)
            ->conditional('form_type', '==', 'gravity_form')

        ->addNumber('form', ['label' => 'Form ID'])
            ->setInstructions('Gravity Forms form ID')
            ->conditional('demo_form', '==', false)
                ->and('form_type', '==', 'gravity_form')

        ->addTextarea('hubspot', ['label' => 'HubSpot Script'])
            ->setInstructions('Paste the provided HubSpot script')
            ->conditional('form_type', '==', 'hubspot_form');


return $form;
