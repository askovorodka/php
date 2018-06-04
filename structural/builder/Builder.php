<?php

namespace structural\builder;

abstract class Builder {

    protected $product;

    final public function getProduct() {
        return $this->product;
    }

    public function buildProduct() {
        $this->product = new Product();
    }

}