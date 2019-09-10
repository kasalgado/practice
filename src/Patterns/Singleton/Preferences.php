<?php declare (strict_types=1);

namespace App\Patterns\Singleton;

class Preferences
{
    /** @var array */
    private $values = [];
    
    /** @var self */
    private static $instance;
    
    private function __construct() {}
    
    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        
        return self::$instance;
    }
    
    public function setValue(string $name, string $value): void
    {
        $this->values[$name] = $value;
    }
    
    public function getValue(string $name): string
    {
        return $this->values[$name];
    }
}
