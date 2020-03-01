<?php

namespace App\Helpers;

class Validate
{
    public static function email(string $email): bool
    {
        return true;
    }

    public static function isEmpty(string $field): bool
    {
        return true;
    }

    public static function date(string $date): bool
    {
        return true;
    }
}