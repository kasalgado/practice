<?php declare (strict_types=1);

namespace tests\BindTo;

use PHPUnit\Framework\TestCase;
use App\BindTo\Magic;

class MagicTest extends TestCase
{
    public function testCanGetMagicNumber()
    {
        $obj1 = new Magic(3);
        $obj2 = new Magic(4);
        $obj3 = new Magic(5);
        
        $f1 = $obj1->getClosure();
        $this->assertEquals(3, $f1());
        
        $obj1->setMagic(7);
        $this->assertEquals(7, $f1());
        
        $f2 = $f1->bindTo($obj2);
        $this->assertEquals(7, $f1());
        $this->assertEquals(4, $f2());
        
        $f3 = $obj2->getClosure();
        $this->assertEquals(4, $f3());
        
        $f4 = $f3->bindTo($obj3);
        $this->assertEquals(5, $f4());
        
        $f5 = $f1->bindTo($obj3);
        $this->assertEquals(7, $f1());
        $this->assertEquals(5, $f5());
    }
}
