<?php declare (strict_types=1);

namespace App\Interfaces;

use App\Interfaces\Documentable;

class CommandOutputDocument implements Documentable
{
    /**
     * @var string
     */
    private $command;
    
    public function __construct(string $command)
    {
        $this->command = $command;
    }

    public function getContent(): string
    {
        return shell_exec($this->command);
    }

    public function getId(): string
    {
        return $this->command;
    }
}
