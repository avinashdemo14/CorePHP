<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testTwoValuesAreSame() {
        $this->assertSame(1,1);
    }

    public function testTwoValuesAreSames() {
        $this->assertSame(1,1);
    }
}