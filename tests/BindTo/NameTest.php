<?php declare (strict_types=1);

namespace tests\BindTo;

use PHPUnit\Framework\TestCase;
use App\BindTo\Name;

class NameTest extends TestCase
{
    public function testCanGetName()
    {
        $obj1 = new Name('Niklas');
        $obj2 = new Name('Malin');
        
        $fn1 = $obj1->getName();
        $this->assertEquals('Hello Niklas', $fn1('Hello'));
        
        $fn2 = $fn1->bindTo($obj2);
        $this->assertEquals('Hola Malin', $fn2('Hola'));
    }
}
