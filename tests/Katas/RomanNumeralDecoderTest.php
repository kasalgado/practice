<?php

use PHPUnit\Framework\TestCase;
use App\Katas\RomanNumeralDecoder;

class RomanNumeralDecoderTest extends TestCase
{
    public function testCanGetSingleNumber()
    {
        $rmd = new RomanNumeralDecoder();
        
        $this->assertEquals(1, $rmd->getNumber('I'));
        $this->assertEquals(5, $rmd->getNumber('V'));
    }
    
    public function testCanGetDoubleNumber()
    {
        $rmd = new RomanNumeralDecoder();
        
        $this->assertEquals(2, $rmd->getNumber('II'));
        $this->assertEquals(4, $rmd->getNumber('IV'));
        $this->assertEquals(90, $rmd->getNumber('XC'));
    }
    
    public function testCanGetBigNumber()
    {
        $rmd = new RomanNumeralDecoder();
        
        $this->assertEquals(13, $rmd->getNumber('XIII'));
        $this->assertEquals(144, $rmd->getNumber('CXLIV'));
        $this->assertEquals(1954, $rmd->getNumber('MCMLIV'));
        $this->assertEquals(1666, $rmd->getNumber('MDCLXVI'));
    }
}
