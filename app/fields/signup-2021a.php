<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$signup2021a = new FieldsBuilder('signup2021a', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$signup2021a
    ->setLocation('page_template', '==', 'views/signup-2021a.blade.php');

$signup2021a
    ->addTab('Left Side Content')
        ->addWysiwyg('primary_content')
        ->addWysiwyg('secondary_content')

    ;

return $signup2021a;
