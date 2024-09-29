<?php

namespace App\Services;

use App\Models\User;

class Awards
{
    public function __construct()
    {
    }

    public static function GetAward(User $user) {
        if ($user->id === 1) {
            return 'Salesman of the Year';
        }

        if ($user->id === 11) {
            return 'Employee of the Month';
        }

        return '';
    }
}
