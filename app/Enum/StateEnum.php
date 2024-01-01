<?php

namespace App\Enum;

enum StateEnum: string
{
    case NSW  = 'New South Wales (NSW)';
    case VIC = 'Victoria (VIC)';
    case QLD = 'Queensland (QLD)';
    case SA = 'South Australia (SA)';
    case WA = 'Western Australia (WA)';
    case TAS = 'Tasmania (TAS)';
    case ACT = 'Australian Capital Territory (ACT)';
    case NT = 'Northern territory (NT)';

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
