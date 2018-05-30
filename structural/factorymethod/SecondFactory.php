<?php
namespace structural\factorymethod;

class SecondFactory implements FactoryInterface {
    public function getProduct(): ProductInterface
    {
        return new SecondProduct();
    }
}