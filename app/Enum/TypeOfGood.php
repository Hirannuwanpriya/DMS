<?php
declare(strict_types=1);

namespace App\Enum;

enum TypeOfGood: int
{
    const Document   = 0;
    const Parcel = 1;

    //get name from value
    public static function getTypeOfGood(int $value): string
    {
        return match ($value) {
            self::Document => 'Document',
            self::Parcel => 'Parcel',
            default => 'Unknown',
        };
    }

}
