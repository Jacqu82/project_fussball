<?php

namespace AppBundle\Utils;

abstract class Helper
{
    public static function addUniqueValueToArray(&$arr, $value, $limit = null)
    {
        if (!in_array($value, $arr))
        {
            $arr[] = $value;

            if ($limit !== null && count($arr) > $limit)
            {
                array_shift($arr);
            }

            return true;
        }

        return false;
    }

    public static function isImageMime($mime)
    {
        return in_array($mime, self::imageMimesTypes());
    }

    public static function imageMimesTypes()
    {
        return [
            'image/jpg',
            'image/jpeg',
            'image/png'
        ];
    }

    public static function getSlug($str)
    {
        $str = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $str = strtolower($str);
        $str = preg_replace('/[\ ]+/', '-', $str);
        $str = preg_replace('/[^0-9a-zA-Z\-]+/', '', $str);
        $str = trim($str, '-');

        return $str;
    }

    public static function getRandomToken($length)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $token = null;

        for ($i = 1; $i <= $length; $i++)
        {
            $token .= $chars[rand(0, strlen($chars) - 1)];
        }

        return $token;
    }
}