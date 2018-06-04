<?php
namespace structural\builder;

class Factory
{
    private $builder;

    public function __construct(Builder $builder) {
        $this->builder = $builder;
        $this->builder->buildProduct();
    }

    public function getProduct() {
        return $this->builder->getProduct();
    }
}