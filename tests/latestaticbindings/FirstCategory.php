<?php

namespace tests\latestaticbindings;

class FirstCategory {

    protected static $instance = null;

    final private function __construct()
    {
    }

    final private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    final private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance() {
        if (is_null(static::$instance)) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    public function __toString()
    {
        return __CLASS__;
    }
}