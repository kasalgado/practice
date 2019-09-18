<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Before;

class MegaEncoder extends AppointmentEncoder
{
    public function encode(): string
    {
        return 'Message from Call-Communicator';
    }
}
