<?php

namespace structural\factorymethod;

$factory = new FirstFactory();
$product = $factory->getProduct();

echo $product->getName() . '<br>';

$factory = new SecondFactory();
$product = $factory->getProduct();
echo  $product;
