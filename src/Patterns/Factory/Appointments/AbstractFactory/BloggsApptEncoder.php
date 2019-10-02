<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

class BloggsApptEncoder extends ApptEncoder
{    
    public function encode(): string
    {
        return 'Appt encodes by bloggs';
    }
}
