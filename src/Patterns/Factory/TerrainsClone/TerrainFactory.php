<?php declare (strict_types=1);

namespace App\Patterns\Factory\TerrainsClone;

class TerrainFactory
{
    /** @var Sea */
    private $sea;
    
    /** @var Forest */
    private $forest;

    public function __construct(Sea $sea, Forest $forest)
    {
        $this->sea = $sea;
        $this->forest = $forest;
    }
    
    public function getSea(): Sea
    {
        return clone $this->sea;
    }
    
    public function getForest(): Forest
    {
        return clone $this->forest;
    }
}
