<?php declare (strict_types=1);

namespace tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use App\ValueObjects\Money;

class MoneyTest extends TestCase
{
    public function testCanGetTrueOrFalseFromEquals()
    {
        $money1 = new Money(100);
        $money2 = new Money(100, 'USD');
        $money3 = new Money(200, 'EU');
        
        $this->assertTrue($money1->equals($money1));
        $this->assertTrue($money1->equals($money2));
        $this->assertFalse($money1->equals($money3));
    }
    
    public function testCanGetAddedValue()
    {
        $expected = 300;
        $money1 = new Money(100);
        $money2 = new Money(200);
        $moneyToAdd = $money1->toAdd($money2);
        
        $this->assertEquals($expected, $moneyToAdd->getValue());
    }
    
    public function testCanGetSameValueByAddingNull()
    {
        $expected = 100;
        $money1 = new Money(100);
        $money2 = new Money(0);
        $moneyToAdd = $money1->toAdd($money2);
        
        $this->assertEquals($expected, $moneyToAdd->getValue());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage You can only add money with the same currency
     */
    public function testCanGetInvalidArgumentException()
    {
        $expected = 300;
        $money1 = new Money(100);
        $money2 = new Money(200, 'EU');
        $money1->toAdd($money2);
    }
}
