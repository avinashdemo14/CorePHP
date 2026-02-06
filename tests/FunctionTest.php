<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class FunctionTest extends TestCase {
    public function testAddIntegers() {
        $this->assertSame(2,addIntegers(1,1));
        $this->assertSame(-3,addIntegers(-1,-2));
    }
    public function testAddIntegers2() {
        $this->assertSame(2,addIntegers(1,1));
    }
    public function testAddIntegers3() {
        $this->assertSame(2,addIntegers(1,1));
    }
}