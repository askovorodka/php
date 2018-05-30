<?php
namespace structural\factorymethod;

class FirstFactory implements FactoryInterface {
    public function getProduct(): ProductInterface
    {
        return new FirstProduct();
    }
}