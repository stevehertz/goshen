<?php

namespace App\Enums;

class InStock
{
    const IN_STOCK = 1;
    const OUT_STOCK = 0;

    public static function toArray(): array
    {
        return [
            self::IN_STOCK => 'In Stock',
            self::OUT_STOCK => 'Out of Stock',
        ];
    }

    public static function getName($value): string
    {
        switch ($value) {
            case self::IN_STOCK:
                return 'In Stock';
            case self::OUT_STOCK:
                return 'Out of Stock';
            default:
                return '';
        }
    }
}
