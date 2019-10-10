<?php declare (strict_types=1);

namespace App\Patterns\Factory\TerrainsClone;

abstract class Sea
{
    /** @var int */
    private $navigability = 0;
    
    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }
    
    public abstract function create(): string;
}
