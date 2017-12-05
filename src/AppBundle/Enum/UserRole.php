<?php

namespace AppBundle\Enum;

use AppBundle\Enum\Base\Enum;

abstract class UserRole extends Enum
{
    const Admin = 'admin';
    const User = 'user';

    public static function getAdmin()
    {
        return [
            self::Admin => 'label.admin',
        ];
    }

    public static function getUser()
    {
        return [
            self::User => 'label.user',
        ];
    }
}
