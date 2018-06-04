<?php

namespace structural\builder;

class Product
{
    private $name;

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

}