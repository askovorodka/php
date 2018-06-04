<?php
namespace structural\builder;

try {

    $firstDirector = new Factory(new FirstBuilder());
    echo $firstDirector->getProduct()->getName();

    $secondDirector = new Factory(new SecondBuilder());
    echo $secondDirector->getProduct()->getName();

} catch (\Exception $exception) {
    die($exception->getMessage());
}