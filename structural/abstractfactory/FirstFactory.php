<?php
namespace structural\abstractfactory;

class FirstFactory extends AbstractFactory {

    public function getProduct(): ProductInterface
    {
        return new FirstProduct();
    }
}