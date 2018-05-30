<?php
namespace structural\abstractfactory;

abstract class AbstractFactory
{
    abstract public function getProduct(): ProductInterface;

    /**
     * @return AbstractFactory
     * @throws \Exception
     */
    public static function getFactory(): AbstractFactory {
        switch (Config::$factory) {
            case Config::FACTORY_ONE:
                return new FirstFactory();
                break;
            case Config::FACTORY_TWO:
                return new SecondFactory();
                break;
        }

        throw new \Exception('Bad config');
    }
}