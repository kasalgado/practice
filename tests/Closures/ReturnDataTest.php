<?php declare (strict_types=1);

namespace tests\Closures;

use PHPUnit\Framework\TestCase;
use App\Closures\AsVariable;
use App\Closures\Mapping;
use App\Closures\Attach;

class ReturnDataTest extends TestCase
{
    public function testCanGetNameFromClosure()
    {
        $asVariable = new AsVariable();
        $this->assertEquals('KAS', $asVariable->getName('KAS'));
    }
    
    public function testCanGetMappedResultFromNumbers()
    {
        $expected = [2, 3, 4];
        $mapping = new Mapping();
        
        $this->assertEquals($expected, $mapping->getResult([1, 2, 3]));
    }
    
    public function testCanGetMappedResultFromNumbersWithAddition()
    {
        $expected = [6, 7, 8];
        $mapping = new Mapping();
        
        $this->assertEquals($expected, $mapping->getResultWithNumber(5, [1, 2, 3]));
    }
    
    public function testCanGetTextFromClosure()
    {
        $expected = 'KAS, how are you today?';
        $attach = new Attach();
        
        $this->assertEquals($expected, $attach->getText('KAS', 'how are you today?'));
    }
}
