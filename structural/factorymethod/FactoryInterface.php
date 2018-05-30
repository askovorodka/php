<?php
namespace structural\factorymethod;

interface FactoryInterface {
    public function getProduct(): ProductInterface;
}