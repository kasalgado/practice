<?php declare (strict_types=1);

namespace tests\Patterns\Lessons\Before;

use PHPUnit\Framework\TestCase;
use App\Patterns\Lessons\Before\Lecture;

class LectureTest extends TestCase
{
    public function testCanGetFixedRate()
    {
        $expected = '30 (fixed rate)';
        $lecture = new Lecture(5, 1);
        
        $this->assertEquals($expected, $lecture->total());
    }
    
    public function testCanGetHourlyRate()
    {
        $expected = '50 (hourly rate)';
        $lecture = new Lecture(10, 2);
        
        $this->assertEquals($expected, $lecture->total());
    }
}
