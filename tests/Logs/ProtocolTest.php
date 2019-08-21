<?php declare (strict_types=1);

namespace tests\Logs;

use PHPUnit\Framework\TestCase;
use App\Logs\Protocol;

class ProtocolTest extends TestCase
{
    public function testCanAddMessageToDevelopmentFile()
    {
        $protocol = new Protocol('Dev-Environment');
        $this->assertTrue($protocol->debug('Debug message'));
    }
    
    public function testCanAddMessageToProductionFile()
    {
        $protocol = new Protocol('Prod-Environment');
        $this->assertTrue($protocol->warning('Warning message'));
    }
}
