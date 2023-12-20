<?php

namespace App\Enum;

enum TypeEnum: string
{
    case NEWS = 'news';
    case BLOGS = 'blog';

    public function label(): string
    {
        return self::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::NEWS => 'समाचार',
            self::BLOGS => 'ब्लगहरू',
        };
    }
}
