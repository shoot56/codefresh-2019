<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$pricing = new FieldsBuilder('pricing', ['hide_on_screen' => 'the_content']);

$pricing
    ->setLocation('post_template', '==', 'views/page-pricing.blade.php');

$pricing
    ->addFields(get_field_partial('partials.plan-basic'))
    ->addFields(get_field_partial('partials.plan-pro'))
    ->addFields(get_field_partial('partials.plan-enterprise'));

return $pricing;
