<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team_member = new FieldsBuilder('team_member');

$team_member
    ->addTrueFalse('cf_team_leader', ['label' => 'Leader', 'ui' => 1])
    ->addText('role', ['label' => 'Role']);

return $team_member;
