<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Before;

class BloggEncoder extends AppointmentEncoder
{
    public function encode(): string
    {
        return 'Message from Blogg-Communicator';
    }
}
