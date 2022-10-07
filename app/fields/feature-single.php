<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$featureSingle = new FieldsBuilder('featureSingle', ['hide_on_screen' => 'slug']);

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$featureSingle
    ->setLocation('page_template', '==', 'views/page-features-single.blade.php');

$featureSingle
    ->addTab('Hero')
        ->addWysiwyg('hero_content', ['media_upload' => 0])

    ->addTab('Features')
        ->addRepeater('screens_rep')
            ->addImage('icon', ['preview' => 'thumbnail', 'wrapper' => ['width' => 20]])
            ->addWysiwyg('content', ['media_upload' => 0, 'toolbar' => 'basic'])
            ->addImage('image')
        ->endRepeater()

    ->addTab('Go Advanced')
        ->addWysiwyg('go_adv', ['media_upload' => 0, 'toolbar' => 'basic'])

    ->addTab('Learn More')
        ->addAccordion('Link 1')
        ->addGroup('link_1', ['label' => 'Link'])
            ->addText('label', ['wrapper' => $config->wrapper])
                ->setInstructions('Label shown on the link.')

            ->addOembed('video', ['wrapper' =>  $config->wrapper])
                ->setInstructions('Video url. (Make sure Foobox is active on the page).')
        ->endGroup()

        ->addAccordion('Link 2')
        ->addGroup('link_2', ['label' => 'Link'])
            ->addText('label', ['wrapper' => $config->wrapper])
                ->setInstructions('Label shown on the link.')

            ->addUrl('url', ['label' => 'URL', 'wrapper' => $config->wrapper])
                ->setInstructions('Link to.')
            ->addAccordion('')
                ->endPoint()
        ->endGroup();


return $featureSingle;
