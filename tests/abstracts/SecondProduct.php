<?php
namespace tests\abstracts;

final class SecondProduct extends FirstProduct implements ProductIface {
    private $id = 2;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return __CLASS__;
    }

}