<?php declare (strict_types=1);

namespace App\Interfaces;

class StreamDocument implements Documentable
{
    protected $resource;
    protected $buffer;
    
    public function __construct($resource, $buffer = 4096)
    {
        $this->resource = $resource;
        $this->buffer = $buffer;
    }
    
    public function getContent(): string
    {
        $streamContent = '';
        rewind($this->resource);
        
        while (feof($this->resource) === false) {
            $streamContent .= fread($this->resource, $this->buffer);
        }
        
        return $streamContent;
    }

    public function getId(): string
    {
        return 'resource-' . (int) $this->resource;
    }
}
