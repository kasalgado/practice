<?php declare (strict_types=1);

namespace tests\Patterns\Lessons\Composition;

use PHPUnit\Framework\TestCase;
use App\Patterns\Lessons\Composition\Lecture;
use App\Patterns\Lessons\Composition\FixedCostStrategy;
use App\Patterns\Lessons\Composition\TimedCostStrategy;

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
