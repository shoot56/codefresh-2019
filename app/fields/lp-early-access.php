<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$earlyAccess = new FieldsBuilder('earlyAccess', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$earlyAccess
    ->setLocation('page_template', '==', 'views/lp-early-access.blade.php');

$earlyAccess
    ->addTab('Content')
        ->addText('highlighted_text')
        ->addWysiwyg('content', ['media_upload' => 0])
    ->addTab('Form')
        ->addWysiwyg('form_title', ['media_upload' => 0, 'toolbar' => 'basic'])
        ->addNumber('form_id')
            ->setInstructions('Please visit <a href="'.admin_url('admin.php?page=gf_edit_forms').'" target="_blank">Forms</a> to find the Form ID.');

return $earlyAccess;
