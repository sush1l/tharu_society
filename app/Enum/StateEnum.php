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
            self::NSW => 'New South Wales (NSW)',
            self::VIC => 'Victoria (VIC)',
            self::QLD => 'Queensland (QLD)',
            self::SA => 'South Australia (SA)',
            self::WA => 'Western Australia (WA)',
            self::TAS => 'Tasmania (TAS)',
            self::ACT => 'Australian Capital Territory (ACT)',
            self::NT => 'Northern territory (NT)',
        };
    }
}
