<?php

namespace App\Enums;

class OrderStatus {

    const COMPLETE = 2;
    const PENDING = 1;
    const INCOMPLETE = 0;

    public static function toArray(): array
    {
        return [
            self::COMPLETE => 'Complete',
            self::PENDING => 'Pending',
            self::INCOMPLETE => 'Incomplete',
        ];
    }

    public static function getName($value): string
    {
        switch ($value) {
            case self::COMPLETE:
                return 'Complete';
            case self::PENDING:
                return 'Pending';
            case self::INCOMPLETE:
                return 'Incomplete';
            default:
                return '';
        }
    }

}
