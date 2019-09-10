<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Patterns\Generating\NastyBoss;
use App\Patterns\Generating\Minion;
use App\Patterns\Generating\WellConnected;
use App\Patterns\Generating\Employee;

class NastyBossTest extends TestCase
{
    public function testCanGetMinionEmployee()
    {
        $expected1 = 'Niklas: I will clear my desk';
        $expected2 = 'Mary: I will clear my desk';
        $nastyBoss = new NastyBoss();
        $nastyBoss->addEmployee(new Minion('KAS'));
        $nastyBoss->addEmployee(new Minion('Mary'));
        $nastyBoss->addEmployee(new Minion('Niklas'));
        
        $this->assertEquals($expected1, $nastyBoss->projectFails());
        $this->assertEquals($expected2, $nastyBoss->projectFails());
        
        $nastyBoss->addEmployee(new Minion('Niklas'));
        $this->assertEquals($expected1, $nastyBoss->projectFails());
    }
    
    public function testCanGetWellConnectedEmployee()
    {
        $expected = 'KAS: I will call my Mom';
        $nastyBoss = new NastyBoss();
        $nastyBoss->addEmployee(new WellConnected('KAS'));
        
        $this->assertEquals($expected, $nastyBoss->projectFails());
    }
    
    public function testCanFactoryEmployee()
    {
        $expected1 = 'KAS: I will call my Mom';
        $expected2 = 'Mary: I will clear my desk';
        $nastyBoss = new NastyBoss('KAS');
        $nastyBoss->addEmployee(Employee::recruit('KAS', 1));
        
        $this->assertEquals($expected1, $nastyBoss->projectFails());
        
        $nastyBoss->addEmployee(Employee::recruit('Mary', 0));
        $this->assertEquals($expected2, $nastyBoss->projectFails());
    }
}
