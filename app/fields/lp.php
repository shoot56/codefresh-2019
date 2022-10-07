<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_template', '==', 'views/page-no-header-footer.blade.php')
        ->or('post_template', '==', 'views/page-guide.blade.php')
    ->setGroupConfig('position', 'side');

$page
    ->addFields(get_field_partial('partials.form'))
    ->addFields(get_field_partial('partials.customers'));

return $page;
