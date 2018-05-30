<?php
namespace tests\latestaticbindings;

class SecondCategory extends FirstCategory
{

    protected static $instance = null;

    public function __toString()
    {
        return __CLASS__;
    }
}