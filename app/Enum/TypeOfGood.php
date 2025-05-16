<?php

namespace App\Enum;

final class TypeOfGood extends Enum
{
    const Document   = 1;
    const Parcel = 2;

    public static function getTypeOfGoodList()
    {
        return [
            self::Document => 'Document',
            self::Parcel => 'Parcel',
        ];
    }


}
