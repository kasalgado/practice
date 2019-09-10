<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Singleton\Preferences;

class PreferencesTest extends TestCase
{
    public function testCanGetOnlyOneInstance()
    {
        $expected = 'Malin';
        $preferences1 = Preferences::getInstance();
        $preferences1->setValue('name', 'Malin');
        
        $this->assertEquals($expected, $preferences1->getValue('name'));
        
        unset($preferences1);
        $preferences2 = Preferences::getInstance();
        
        $this->assertEquals($expected, $preferences2->getValue('name'));
    }
}
