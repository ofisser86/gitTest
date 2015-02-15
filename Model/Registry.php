<?php
/*
*
*  class Registry - objects styorage array, by keys
*
*  Registry::set('post.mapper', new \Post\Mapper);
*
*/

namespace Model;

abstract class Registry
{	private static $objects = array();

	public static function set($key, $object)
	{		self::$objects[$key] = $object;	}

	public static function has($key)
	{		return isset(self::$objects[$key]);	}

	public static function get($key)
	{		if (self::has($key)) {			return self::$objects[$key];
		}

		return null;	}}