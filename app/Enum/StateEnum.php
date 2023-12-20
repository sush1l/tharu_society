<?php

namespace App\Enum;

enum StateEnum: string
{
    case NSW  = 'nsw';
    case VIC = 'vic';
    case QLD = 'qld';
    case SA = 'sa';
    case WA = 'wa';
    case TAS = 'tas';
    case ACT = 'act';
    case NT = 'nt';

    public function label(): string
    {
        return self::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::NSW => 'NSW',
            self::VIC => 'VIC',
            self::QLD => 'QLD',
            self::SA => 'SA',
            self::WA => 'WA',
            self::TAS => 'TAS',
            self::ACT => 'ACT',
            self::NT => 'NT',
        };
    }
}
