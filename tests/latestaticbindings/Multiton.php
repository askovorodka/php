<?php

namespace tests\latestaticbindings;

class Multiton {
    private static $instances = [];

    final private function __construct()
    {
    }

    final private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    final private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance(string $key): Multiton{
        if (!array_key_exists($key, self::$instances)) {
            self::$instances[$key] = new self();
        }

        return self::$instances[$key];
    }

}