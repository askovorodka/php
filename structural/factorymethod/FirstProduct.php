<?php
namespace structural\factorymethod;

class FirstProduct implements ProductInterface {
    public function getName(): string
    {
        return "This is first product";
    }

    public function __toString()
    {
        return $this->getName();
    }
}