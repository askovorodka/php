<?php
namespace structural\abstractfactory;

try {

    $firstProduct = AbstractFactory::getFactory()->getProduct();

    echo $firstProduct->getName() . '<br>';

    Config::$factory = Config::FACTORY_TWO;
    $secondProduct = AbstractFactory::getFactory()->getProduct();

    echo $secondProduct->getName() . '<br>';

} catch (\Exception | FactoryException $exception) {

} finally {
    die("end of work");
}