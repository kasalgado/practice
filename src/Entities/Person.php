<?php declare (strict_types=1);

namespace App\Entities;

class Person
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function equals(Person $person): bool
    {
        return $this->name === $person->name;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}
