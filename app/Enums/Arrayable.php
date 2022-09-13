<?php

namespace App\Enums;

trait Arrayable
{
    public static function keys(): array
    {
        return array_map(function ($case) {
            return $case->name;
        }, self::cases());
    }

    public static function values(): array
    {
        return array_map(function ($case) {
            return $case->value;
        }, self::cases());
    }
}
