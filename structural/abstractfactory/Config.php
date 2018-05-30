<?php

namespace structural\abstractfactory;

class Config {
    public const FACTORY_ONE = 1;
    public const FACTORY_TWO = 2;
    public const FACTORY_THREE = 3;

    public static $factory = self::FACTORY_ONE;
}