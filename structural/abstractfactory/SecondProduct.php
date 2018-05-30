<?php

namespace structural\abstractfactory;
class SecondProduct implements ProductInterface {
    public function getName(): string
    {
        return "This is a second product";
    }
}