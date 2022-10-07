<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$form = new FieldsBuilder('form');

$form
    ->setLocation('post_template', '==', 'views/page-form-solo.blade.php')
    ->setGroupConfig('position', 'side');

$form
    ->addFields(get_field_partial('partials.form'));

return $form;