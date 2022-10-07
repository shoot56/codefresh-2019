<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$open_source_fund = new FieldsBuilder('open_source_fund', ['style' => 'seemless', 'hide_on_screen' => 'revisions, excerpt, slug, the_content']);

$open_source_fund
    ->setLocation('page_template', '==', 'views/lp-open-source-fund.blade.php');

$open_source_fund
    ->addTab('Hero')
        ->addText('head_title')
            ->setDefaultValue('introducing the Codefresh')
        ->addNumber('fund_amount')
            ->setDefaultValue(100000000)
        ->addTextarea('short_description')
    ->addTab('Main')
        ->addWysiwyg('content')
        ->addNumber('form', ['label' => 'Form ID'])
            ->setInstructions('Gravity forms form ID')
            ->setDefaultValue(67);


return $open_source_fund;
