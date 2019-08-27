<?php declare (strict_types=1);

namespace tests\Patterns\Lessons\Manager;

use PHPUnit\Framework\TestCase;
use App\Patterns\Lessons\Manager\Registration;
use App\Patterns\Lessons\Composition\FixedCostStrategy;
use App\Patterns\Lessons\Composition\TimedCostStrategy;
use App\Patterns\Lessons\Composition\Lecture;
use App\Patterns\Lessons\Composition\Seminar;

class RegistrationTest extends TestCase
{
    public function testCanGetMailNotification()
    {
        $MailType = 1;
        $expected = 'Mail notification: New lesson cost 50 (hourly rate)';
        $strategy = new TimedCostStrategy();
        $lecture = new Lecture(10, $strategy);
        $registration = new Registration();
        
        $this->assertEquals($expected, $registration->register($lecture, $MailType));
    }
    
    public function testCanGetTextNotification()
    {
        $TextType = 2;
        $expected = 'Text notification: New lesson cost 30 (fixed rate)';
        $strategy = new FixedCostStrategy();
        $lecture = new Lecture(5, $strategy);
        $registration = new Registration();
        
        $this->assertEquals($expected, $registration->register($lecture, $TextType));
    }
    
    public function testCanGetSMSNotification()
    {
        $SMSType = 3;
        $expected = 'SMS notification: New lesson cost 30 (fixed rate)';
        $strategy = new FixedCostStrategy();
        $seminar = new Seminar(5, $strategy);
        $registration = new Registration();
        
        $this->assertEquals($expected, $registration->register($seminar, $SMSType));
    }
}
