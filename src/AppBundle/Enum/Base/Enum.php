<?php

namespace AppBundle\Enum\Base;

abstract class Enum implements EnumInterface
{
    public static function get($key)
    {
        $arr = static::getData();

        if (!isset($arr[$key]))
            return null;

        return $arr[$key];
    }

    public static function getKeys()
    {
        return array_keys(static::getData());
    }

    public static function getValues()
    {
        return array_values(static::getData());
    }

    public static function getChoices()
    {
        return array_flip(static::getData());
    }

    public static function getData()
    {
        throw new \Exception('You must implemented getValues() method.');
    }
}