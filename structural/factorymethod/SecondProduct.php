<?php
namespace structural\factorymethod;

class SecondProduct implements ProductInterface {
    public function getName(): string
    {
        return "This is a second product";
    }
    public function __toString()
    {
        return $this->getName();
    }
}