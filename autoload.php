<?php

class Autoloader {
    public static function load($class) {
        $filename = str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        if (file_exists($filename)) {
            require_once $filename;
            if (class_exists($class)) {
                return true;
            }
        }
        return false;
    }
}

spl_autoload_register("Autoloader::load");