<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Implementation;

class BloggsEncoder extends AppointmentEncoder
{
    public function encode(): string
    {
        return 'Appointment data encoded in BloggsCal format';
    }
}
