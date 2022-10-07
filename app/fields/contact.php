<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$contact = new FieldsBuilder('contact');

$contact
    ->setLocation('page', '==', '790');

$contact
    ->addTab('Help Options')

      ->addText('opt_title', ['label' => 'Title'])
        ->setDefaultValue('How can we help?')

      ->addAccordion('Schedule a demo')
        ->addGroup('opt_schedule', ['label' => ''])
          ->addText('title')
            ->setDefaultValue('Schedule a demo')
          ->addUrl('url')
            ->setDefaultValue('https://codefresh.io/schedule-a-demo')
        ->endGroup()

      ->addAccordion('Live chat')
        ->addGroup('opt_livechat', ['label' => ''])
          ->addText('title')
            ->setDefaultValue('Start a live chat')
        ->endGroup()

      ->addAccordion('Documentation')
        ->addGroup('opt_docs', ['label' => ''])
          ->addText('title')
            ->setDefaultValue('Read the documentation')
          ->addUrl('url')
            ->setDefaultValue('https://codefresh.io/docs')
        ->endGroup()

      ->addAccordion('')
        ->endPoint()

    ->addTab('Branches')
      ->addRepeater('branches', ['layout' => 'block'])
        ->addText('name')
        ->addText('full_address')
        ->addText('telephone')
        ->addGoogleMap('address')
      ->endRepeater();

return $contact;
