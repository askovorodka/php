<?php

namespace structural\factory;

try {

    $automobile = AutomobileFactory::create('BMW', '1 series');

    echo $automobile->getMakeAndModel();

} catch (\Exception $exception) {
    echo $exception->getMessage();
}