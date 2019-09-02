<?php declare (strict_types=1);

namespace tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use App\ValueObjects\Currency;

class CurrencyTest extends TestCase
{
    public function testCanCheckFormat()
    {
        $expected = 'USD';
        $currency = new Currency('USD');
        
        $this->assertEquals($expected, $currency->get());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Currency has to consist of three letters
     */
    public function testCanThrowExceptionIfFormatIsNotCorrect()
    {
        $currency = new Currency('ab');
    }
}
