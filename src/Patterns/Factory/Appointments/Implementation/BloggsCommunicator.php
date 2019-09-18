<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Implementation;

class BloggsCommunicator extends Communicator
{
    public function getEncoder(): AppointmentEncoder
    {
        return new BloggsEncoder();
    }

    public function getFooterText(): string
    {
        return 'Bloggs footer text content';
    }

    public function getHeaderText(): string
    {
        return 'Bloggs header text content';
    }
}
