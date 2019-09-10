<?php declare (strict_types=1);

namespace App\Patterns\Generating;

abstract class Employee
{
    /** @var string */
    protected $name;
    
    /** @var array */
    private static $types = ['Minion', 'WellConnected'];
    
    public static function recruit(string $name, int $type): object
    {
        $className = 'App\\Patterns\\Generating\\'.self::$types[$type];        
        return new $className($name);
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    abstract function fire(): string;
}
