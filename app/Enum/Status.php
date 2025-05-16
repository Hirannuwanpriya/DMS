<?php

namespace App\Enum;

final class Status extends Enum
{
    const Active   = 1;
    const Archived = 2;
    const Deleted  = 3;

    public static function getStatusList()
    {
        return [
            self::Active => 'Active',
            self::Archived => 'Archived',
            self::Deleted => 'Deleted',
        ];
    }
}
