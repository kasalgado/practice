<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Implementation;

class MegaCommunicator extends Communicator
{
    public function getEncoder(): AppointmentEncoder
    {
        return new MegaEncoder();
    }

    public function getFooterText(): string
    {
        return 'Mega footer text content';
    }

    public function getHeaderText(): string
    {
        return 'Mega header text content';
    }
}
