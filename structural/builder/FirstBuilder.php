<?php
namespace structural\builder;

class FirstBuilder extends Builder {
    public function buildProduct()
    {
        parent::buildProduct(); // TODO: Change the autogenerated stub
        $this->product->setName('this product of the first builder');
    }
}