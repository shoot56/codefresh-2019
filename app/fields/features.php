<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$features = new FieldsBuilder('features', ['hide_on_screen' => 'slug']);

$features
    ->setGroupConfig('position', 'acf_after_title')
    ->setLocation('page_template', '==', 'views/page-features.blade.php');

$features
    ->addFields(get_field_partial('partials.features-1'))
    ->addFields(get_field_partial('partials.features-2'))
    ->addFields(get_field_partial('partials.features-3'))
    ->addFields(get_field_partial('partials.features-4'))
    ->addFields(get_field_partial('partials.features-5'))
    ->addFields(get_field_partial('partials.features-6'))
    ->addFields(get_field_partial('partials.features-7'));

return $features;
