<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Before;

class Communicator
{
    const BLOGG = 1;
    const MEGA = 2;
    
    private $mode;
    
    public function __construct(int $mode)
    {
        $this->mode = $mode;
    }
    
    public function getEncoder(): AppointmentEncoder
    {
        switch ($this->mode) {
            case self::BLOGG:
                return new BloggEncoder();
                
            case self::MEGA:
                return new MegaEncoder();
        }
    }
}
