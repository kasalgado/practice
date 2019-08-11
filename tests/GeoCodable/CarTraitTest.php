<?php declare (strict_types=1);

namespace tests\GeoCodable;

use PHPUnit\Framework\TestCase;
use App\GeoCodable\Toyota;
use App\GeoCodable\Ford;

class CarTraitTest extends TestCase
{
    public function testCanCheckToyotaMotorType()
    {
        $motorType = 'CR7';
        $toyota = new Toyota();
        
        $this->assertTrue($toyota->isMotorTypeAvailable($motorType));
        $this->assertTrue($toyota->carIsReady($motorType));
    }
    
    public function testCanCheckFordMotorType()
    {
        $motorType = 'V8';
        $ford = new Ford();
        
        $this->assertTrue($ford->isMotorTypeAvailable($motorType));
        $this->assertTrue($ford->carIsReady($motorType));
    }
    
    public function testNotAvailableMotorType()
    {
        $motorType = 'V6';
        $ford = new Ford();
        
        $this->assertFalse($ford->isMotorTypeAvailable($motorType));
        $this->assertFalse($ford->carIsReady($motorType));
    }
}
