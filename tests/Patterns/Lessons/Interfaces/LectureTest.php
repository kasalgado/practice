<?php declare (strict_types=1);

namespace tests\Patterns\Lessons\Interfaces;

use PHPUnit\Framework\TestCase;
use App\Patterns\Lessons\Interfaces\Lecture;
use App\Patterns\Lessons\Interfaces\FixedCostStrategy;
use App\Patterns\Lessons\Interfaces\TimedCostStrategy;

class LectureTest extends TestCase
{
    public function testCanGetFixedRate()
    {
        $expected = '30 (fixed rate)';
        $strategy = new FixedCostStrategy();
        $lecture = new Lecture(5, $strategy);
        
        $this->assertEquals($expected, $lecture->total());
    }
    
    public function testCanGetTimedRate()
    {
        $expected = '50 (hourly rate)';
        $strategy = new TimedCostStrategy();
        $lecture = new Lecture(10, $strategy);
        
        $this->assertEquals($expected, $lecture->total());
    }
}
