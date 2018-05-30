<?php
namespace tests\abstracts;

$firstProduct = new FirstProduct();
echo $firstProduct->getItem();

$secondProduct = new SecondProduct();
echo $secondProduct->getItem();