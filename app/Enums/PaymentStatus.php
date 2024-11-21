<?php

namespace App\Enums;

class PaymentStatus
{
    const PENDING = 1;
    const PAID = 2;
    const FAILED = 0;

    public static function toArray(): array
    {
        return [
            self::PENDING => 'Pending',
            self::PAID => 'Paid',
            self::FAILED => 'Failed',
        ];
    }

    public static function getName($value): string
    {
        return match ($value) {
            self::PAID => 'Paid',
            self::PENDING => 'Pending',
            self::FAILED => 'Failed',
            default => '',
        };
    }
}
