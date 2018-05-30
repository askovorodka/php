<?php

namespace tests\extend;

class FirstProduct {

    private static $instance;

    final private function __construct()
    {
    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;

    }

    public function __toString()
    {
        return __CLASS__;
    }
}