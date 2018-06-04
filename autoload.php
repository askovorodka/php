<?php

spl_autoload_register("AutoLoader::load");

class Autoloader {

    public static function load($class) {
        $root = dirname(__FILE__);
        $filename = str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        $filepath = $root.'/'.$filename;

        if (file_exists($filepath)) {
            require_once $filepath;
            if (class_exists($class)) {
                return true;
            }
        }

        return false;
    }

}
