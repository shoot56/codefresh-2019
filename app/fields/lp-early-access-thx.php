<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$earlyAccess_thx = new FieldsBuilder('earlyAccess_thx', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$earlyAccess_thx
    ->setLocation('page_template', '==', 'views/lp-early-access-thx.blade.php');

$earlyAccess_thx
    ->addTab('Content')
        ->addText('highlighted_text')
        ->addWysiwyg('content', ['media_upload' => 0])
    ->addTab('Share')
        ->addWysiwyg('share_content', ['media_upload' => 0, 'toolbar' => 'basic']);

return $earlyAccess_thx;
