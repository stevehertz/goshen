<?php

namespace App\Enums;

class Status{
    const ACTIVE = 1;
    const INACTIVE = 0;

    public static function toArray(): array
    {
        return [
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
        ];
    }

    public static function getName($value): string
    {
        switch ($value) {
            case self::ACTIVE:
                return 'Active';
            case self::INACTIVE:
                return 'Inactive';
            default:
                return '';
        }
    }
}
