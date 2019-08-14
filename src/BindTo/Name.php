<?php declare (strict_types=1);

namespace App\BindTo;

class Name
{
    /** @var string */
    private $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function getName(): object
    {
        return function(string $command) {
            return sprintf('%s %s', $command, $this->name);
        };
    }
}
