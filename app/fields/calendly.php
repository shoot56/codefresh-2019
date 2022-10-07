<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$calendly = new FieldsBuilder('calendly');

$calendly
    ->setLocation('post_template', '==', 'views/page-calendly-single.blade.php');

$calendly
    ->addFields(get_field_partial('partials.calendly'));

return $calendly;
