<?php
namespace structural\abstractfactory;

class SecondFactory extends AbstractFactory
{
    public function getProduct(): ProductInterface
    {
        return new SecondProduct();
    }
}