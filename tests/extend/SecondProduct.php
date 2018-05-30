<?php

namespace tests\extend;

class SecondProduct extends FirstProduct {

    public function __toString()
    {
        echo __CLASS__;
    }

}