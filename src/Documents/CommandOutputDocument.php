<?php declare (strict_types=1);

namespace App\Documents;

use App\Documents\Documentable;

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

    public function getContent()
    {
        return shell_exec($this->command);
    }

    public function getId()
    {
        return $this->command;
    }
}
