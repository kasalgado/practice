<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Before;

class Communicator
{
    const BLOGG = 1;
    const CALL = 2;
    
    private $type;
    
    public function __construct(int $type)
    {
        $this->type = $type;
    }
    
    public function getEncoder(): AppointmentEncoder
    {
        switch ($this->type) {
            case self::BLOGG:
                return new BloggEncoder();
                
            case self::CALL:
                return new CallEncoder();
        }
    }
}
