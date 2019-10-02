<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

class BloggsTtdEncoder extends TtdEncoder
{    
    public function encode(): string
    {
        return 'Ttd encodes by bloggs';
    }
}
