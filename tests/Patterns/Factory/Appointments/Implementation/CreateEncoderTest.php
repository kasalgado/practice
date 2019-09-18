<?php declare (strict_types=1);

namespace tests\Patterns\Factory\Appointments\Implementation;

use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\Appointments\Implementation\BloggsCommunicator;
use App\Patterns\Factory\Appointments\Implementation\MegaCommunicator;

class CreateEncoderTest extends TestCase
{
    public function testCanGetBloggsEncoder()
    {
        $expected = 'Appointment data encoded in BloggsCal format';
        $bloggsComunicator = new BloggsCommunicator();
        
        $this->assertEquals($expected, $bloggsComunicator->getEncoder()->encode());
    }
    
    public function testCanGetMegaEncoder()
    {
        $expected = 'Appointment data encoded in MegaCal format';
        $megaCommunicator = new MegaCommunicator();
        
        $this->assertEquals($expected, $megaCommunicator->getEncoder()->encode());
    }
    
    public function testCanGetHeaderAndFooterFromBloggs()
    {
        $expectedHeader = 'Bloggs header text content';
        $expectedFooter = 'Bloggs footer text content';
        $bloggsCommunicator = new BloggsCommunicator();
        
        $this->assertEquals($expectedHeader, $bloggsCommunicator->getHeaderText());
        $this->assertEquals($expectedFooter, $bloggsCommunicator->getFooterText());
    }
}
