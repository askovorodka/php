<?php
use structural\myclass as MyClass;
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase {

    public function testProcess() {
        //$mock = $this->getMockClass(MyClass\MyClass::class);
        //$mock = $this->getMockBuilder('MyClass');
        $mock = $this->createMock(MyClass\MyClass::class);
        $mock->method('process')->willReturn(null);

        $this->assertInstanceOf(MyClass\MyClass::class, $mock);

        $this->assertEquals(null, $mock->process());

        $mock = $this->getMockBuilder(MyClass\MyClass::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        $this->assertInstanceOf(MyClass\MyClass::class, $mock);
        $mock->method('process')->willReturn(null);

        $mock = $this->createMock(MyClass\MyClass::class);
        //$mock->method('getWord')->will($this->returnValue('cold'));

        //$this->assertEquals('cold', $mock->getWord(10));
        $mock->method('getWord')->will($this->returnValue('warm'));
        $this->assertEquals('warm', $mock->getWord(20));

        //$this->assertEquals('hot', $mock->getWord(30));

        $mock->method('getThrow')->will($this->throwException(new \Exception()));
        $mock->getThrow();

    }
}