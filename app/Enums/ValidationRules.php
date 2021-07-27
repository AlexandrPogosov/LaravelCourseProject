<?php

namespace App\Enums;

class ValidationRules
{


    public static function get (string $rule): ?array
    {
        return self::$rules[$rule];
    }

    private static $rules = [

    ];
}
