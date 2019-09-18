<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Implementation;

class MegaEncoder extends AppointmentEncoder
{
    public function encode(): string
    {
        return 'Appointment data encoded in MegaCal format';
    }
}
