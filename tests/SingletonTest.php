<?php

use structural\singleton as Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {

    public function testGetInstance() {

        $this->assertInstanceOf(Singleton\Singleton::class, Singleton\Singleton::getInstance());
    }

}