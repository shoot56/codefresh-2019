<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$member_details = new FieldsBuilder('details');

$member_details
    ->setLocation('post_type', '==', 'team');

$member_details
    ->addFields(get_field_partial('partials.team'));

return $member_details;
