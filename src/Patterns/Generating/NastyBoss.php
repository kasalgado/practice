<?php declare (strict_types=1);

namespace App\Patterns\Generating;

class NastyBoss
{
    /** @var array */
    private $employees = [];
    
    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }
    
    public function projectFails(): string
    {
        if (count($this->employees) > 0) {
            $employee = array_pop($this->employees);
            
            return $employee->fire();
        }
    }
}
