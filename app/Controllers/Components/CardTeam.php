<?php

namespace App\Controllers\Components;

trait CardTeam
{
    public static function teamMemberRole()
    {
        return the_field('role');
    }
}
