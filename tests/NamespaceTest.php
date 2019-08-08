<?php declare (strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;

use App\baz\Bar;
use App\baz\Foo;

class NamespaceTest extends TestCase
{
    public function testCanGetInstaceOf()
    {
        $bar = new Bar();
        $this->assertInstanceOf(Bar::class, $bar);
    }
    
    public function testCanGetInstanceOfWithoutNamespace()
    {
        $foo = new Foo();
        $this->assertInstanceOf(Foo::class, $foo);
    }
    
    public function testCanImportAFunction()
    {
        $this->assertArrayHasKey(0, [1]);
    }
}
