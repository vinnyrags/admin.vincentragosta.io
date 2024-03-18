<?php

namespace DevAnime\Support;

/**
 * trait Singleton
 * @package DevAnime\Support
 */
trait Singleton
{
    private static $instances = [];

    final private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }

    final public static function getInstance()
    {
        if (!isset(self::$instances[static::class])) {
            self::$instances[static::class] = new static;
        }
        return self::$instances[static::class];
    }
}