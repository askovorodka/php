<?php
namespace structural\bridge;

interface PrinterInterface {
    public function setArray(array $array);
    public function setString(string $string);
    public function printArray();
    public function printString();
    public function printer();
}