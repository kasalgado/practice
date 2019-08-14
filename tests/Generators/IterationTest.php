<?php declare (strict_types=1);

namespace tests\Generators;

use PHPUnit\Framework\TestCase;
use App\Generators\Kas;

class IterationTest extends TestCase
{
    public function testCanGetAllLetter()
    {
        $result = 'KAS';
        $kas = new Kas();
        
        $this->assertEquals($result, $kas->getName());
    }
}