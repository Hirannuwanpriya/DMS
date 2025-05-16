<?php

namespace App\Enum;

enum Provider: int
{
    const DHL   = 1;
    const STARTRACK = 2;
    const ZOOM2U = 3;
    const TGE = 4;

    public static function getProviderList()
    {
        return [
            self::DHL => 'DHL',
            self::STARTRACK => 'StarTrack',
            self::ZOOM2U => 'Zoom2U',
            self::TGE => 'TGE',
        ];
    }
}
