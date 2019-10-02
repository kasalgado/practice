<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\Appointments\AbstractFactory\BloggsCommsManagerMake;

class BloggsCommsManagerMakeTest extends TestCase
{
    public function testCanGetApptEncoder()
    {
        $expected = 'Appt encodes by bloggs';
        $bloggsCommsManager = new BloggsCommsManagerMake();
        
        $this->assertEquals($expected, $bloggsCommsManager->make(BloggsCommsManagerMake::TYPE_APPT)->encode());
    }
}
