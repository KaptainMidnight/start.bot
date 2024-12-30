<?php

namespace App\Enums;

enum SexEnum: string
{
    case Male = 'male';
    case Female = 'female';

    public function toString(): string
    {
        return match ($this) {
            self::Male => 'Мужчина',
            self::Female => 'Женщина',
        };
    }
}
