<?php

namespace App\Enum;

enum Role: string
{
    case ADMIN = 'admin';
    case SUBSCRIBER = 'subscriber';
    case EDITOR = 'editor';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getColors(): string
    {
        return match($this) {
            self::ADMIN => 'success',
            self::SUBSCRIBER => 'gray',
            self::EDITOR => 'warning',
        };
    }

    // public static function labels(): array
    // {
    //     return array_column(self::cases(), 'label');
    // }
}
