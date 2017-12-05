<?php

namespace AppBundle\Utils;

use AppBundle\Entity\User\User;

abstract class EntityHelper
{
    public static function getData($type, $web = false)
    {
        return $type == 'startup' ? sprintf('%s/data/startupsCSV.csv', AppHelper::getContentDir($web)) : sprintf('%s/data/investorsCSV.csv', AppHelper::getContentDir($web));
    }
    
    public static function getUserAvatarPath(User $user, $name = 'standard', $web = false)
    {
        return sprintf('%s/avatar_%s.png', self::getUserDirectory($user, $web), $name);
    }

    public static function getUserLogoPath(User $user, $name = 'standard', $web = false)
    {
        return sprintf('%s/logo_%s.png', self::getUserDirectory($user, $web), $name);
    }

    public static function getUserDirectory(User $user, $web = false)
    {
        return sprintf('%s/user/%s', AppHelper::getContentDir($web), $user->getId());
    }
}
