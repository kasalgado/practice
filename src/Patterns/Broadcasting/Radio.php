<?php declare (strict_types=1);

namespace App\Patterns\Broadcasting;

class Radio
{
    /* @var StationStrategy */
    private $station;

    public function __construct(StationStrategy $station)
    {
        $this->station = $station;
    }
    
    public function getMessage(): string
    {
        return $this->station->getMessage();
    }
}
