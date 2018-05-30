<?php

namespace structural\factory;

class AutomobileFactory {
    public static function create(string $make, string $model): Automobile {
        return new Automobile($make, $model);
    }
}