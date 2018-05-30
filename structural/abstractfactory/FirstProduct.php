<?php
namespace structural\abstractfactory;

class FirstProduct implements ProductInterface {
    public function getName(): string
    {
        return "This is a first product";
    }
}