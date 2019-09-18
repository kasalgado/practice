<?php declare (strict_types=1);

namespace tests\Patterns\Factory\Appointments\Before;

use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\Appointments\Before\Communicator;
use App\Patterns\Factory\Appointments\Before\BloggEncoder;
use App\Patterns\Factory\Appointments\Before\MegaEncoder;

class CreateEncoderTest extends TestCase
{
    public function testCanGetBloggEncoder()
    {
        $expected = 'Message from Blogg-Communicator';
        $communicator = new Communicator(Communicator::BLOGG);
        $encoder = $communicator->getEncoder();
        
        $this->assertInstanceOf(BloggEncoder::class, $encoder);
        $this->assertEquals($expected, $encoder->encode());
    }
    
    public function testCanGetMegaEncoder()
    {
        $expected = 'Message from Call-Communicator';
        $communicator = new Communicator(Communicator::MEGA);
        $encoder = $communicator->getEncoder();
        
        $this->assertInstanceOf(MegaEncoder::class, $encoder);
        $this->assertEquals($expected, $encoder->encode());
    }
}
