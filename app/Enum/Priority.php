<?php

namespace App\Enum;

final class Priority extends Enum
{
    const Standard   = 1;
    const Express = 2;
    const Immediate = 3;

    public static function getPriorityList()
    {
        return [
            self::Standard => 'Standard',
            self::Express => 'Express',
            self::Immediate => 'Immediate',
        ];
    }
}
