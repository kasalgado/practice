<?php declare (strict_types=1);

namespace tests\Patterns\Broadcasting;

use PHPUnit\Framework\TestCase;
use App\Patterns\Broadcasting\MorningStation;
use App\Patterns\Broadcasting\NightStation;
use App\Patterns\Broadcasting\Radio;

class RadioTest extends TestCase
{
    public function testCanGetMessageFromMorningStation()
    {
        $expected = 'You are listening Morning Station';
        $morning = new MorningStation();
        $radio = new Radio($morning);
        
        $this->assertEquals($expected, $radio->getMessage());
    }
    
    public function testCanGetMessageFromNightStation()
    {
        $expected = 'You are listening Night Station';
        $morning = new NightStation();
        $radio = new Radio($morning);
        
        $this->assertEquals($expected, $radio->getMessage());
    }
}