<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {
    public function testNames() {
        $person = new Person();
        $this->assertSame('Avinash Jadhav',$person->getName('Avinash','Jadhav'));
         $this->assertSame('Avinash Jadhav',$person->getName('Avinash','Jadhav'));
    }

    public function testNames1() {
        $person = new Person();
        $this->assertSame('Avinash Jadhav',$person->getName('Avinash','Jadhav'));
    }

    public function testNames2() {
        $person = new Person();
        $this->assertSame('Avinash Jadhav',$person->getName('Avinash','Jadhav'));
    }
}