<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$testimonial = new FieldsBuilder('testimonial');

$testimonial
    ->setLocation('post_type', '==', 'testimonials');

$testimonial
    ->addTextarea('content')
    ->addText('client_name');

return $testimonial;
