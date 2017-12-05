<?php

namespace AppBundle\Utils;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

abstract class AppHelper
{
    public static function getCurrentUser(TokenStorageInterface $tokenStorage)
    {
        return $tokenStorage->getToken() && is_object($user = $tokenStorage->getToken()->getUser()) ? $user : null;
    }

    public static function saveUploadedFileToTmpPath(UploadedFile $file)
    {
        $dir = self::getUploadsDir();
        $file->move($dir);

        return sprintf('%s/%s', $dir, $file->getFilename());
    }
    
    public static function getContentDir($web = false)
    {
        return sprintf('%s/content', self::getWebDir($web));
    }

    public static function getUploadsDir($web = false)
    {
        return sprintf('%s/uploads', self::getWebDir($web));
    }

    public static function getWebDir($web = false)
    {
        if (!$web)
            return ROOT_DIR . '/web';

        return null;
    }
}