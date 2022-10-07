<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
    'wrapper_sm' => ['width' => 20],
];

$features_quotes = new FieldsBuilder('features_quotes');

$features_quotes
    ->addTab('Quotes')
        ->addRepeater('quotes')
            ->addTextarea('quote')
            ->addGroup('cite')
                ->addText('name', ['wrapper' => $config->wrapper])
                ->addText('title', ['label' => 'Title and Company', 'wrapper' => $config->wrapper])
            ->endGroup()
        ->endRepeater()
        ->addGroup('quotes_link', ['label' => 'Link'])
            ->addTrueFalse('show', ['ui' => $config->ui, 'label' => 'Show Link', 'wrapper' => $config->wrapper_sm])

            ->addLink('link', ['wrapper' => $config->wrapper])
                ->setInstructions('Link to page')
        ->endGroup();

return $features_quotes;
