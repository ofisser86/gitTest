<?php
/**
 * Created by PhpStorm.
 * User: Valentain
 * Date: 14.02.2015
 * Time: 11:32
 */
namespace Model;
class ForExampleRegistry
{
    private static $objects = array();

    public static function set($key, $object)
    {
        self::$objects[$key] = $object;
    }

    public static function get($key)
    {
        return self::$objects[$key];

    }

    public function has($key)
    {
        return isset(self::$objects[$key]);

    }

}