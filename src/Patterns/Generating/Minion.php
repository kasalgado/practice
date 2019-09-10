<?php declare (strict_types=1);

namespace App\Patterns\Generating;

class Minion extends Employee
{
    public function fire(): string
    {
        return $this->name.': I will clear my desk';
    }
}
