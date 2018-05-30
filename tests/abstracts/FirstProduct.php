<?php
namespace tests\abstracts;

class FirstProduct extends ProductAbs implements ProductIface {

    private $id = 1;

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string
    {
        return __CLASS__;
    }

    public function getItem(): string {
        return $this->getId().$this->getName() . '<br>';
    }
}