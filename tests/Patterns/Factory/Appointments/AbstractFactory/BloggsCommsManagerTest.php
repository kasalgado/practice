<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\Appointments\AbstractFactory\BloggsCommsManager;

class BloggsCommsManagerTest extends TestCase
{
    public function testCanGetApptEncoder()
    {
        $expected = 'Appt encodes by bloggs';
        $bloggsCommsManager = new BloggsCommsManager();
        
        $this->assertEquals($expected, $bloggsCommsManager->getApptEncoder()->encode());
    }
}
