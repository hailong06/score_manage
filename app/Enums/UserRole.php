<?php

namespace App\Enums;

final class UserRole
{
    const ORGANIZATION = 'organization';
    const TEACHER = 'teacher';
    const STUDENT = 'student';

    const
        FEMALE = 0,
        MALE = 1,
        OTHER = 2;
    const
        ACTIVE = 1,
        LOCKED = 2,
        TEMPORARY_LOCKED = 3;

    const RADIUS_LOCATION = 50;

    public static function genders()
    {
        return [
            'women' => self::FEMALE,
            'men' => self::MALE,
            'other' =>self::OTHER
        ];
    }

    public static function aliasGenders(): array
    {
        return [
            self::FEMALE => 'female',
            self::MALE => 'male',
            self::OTHER => 'other'
        ];
    }
}
