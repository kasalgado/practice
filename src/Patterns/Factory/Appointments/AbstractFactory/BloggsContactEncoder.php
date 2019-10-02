<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

class BloggsContactEncoder extends ContactEncoder
{    
    public function encode(): string
    {
        return 'Contact encodes by bloggs';
    }
}
