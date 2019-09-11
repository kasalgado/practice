<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Before;

class CallEncoder extends AppointmentEncoder
{
    public function getMessage(): string
    {
        return 'Message from Call-Communicator';
    }
}
