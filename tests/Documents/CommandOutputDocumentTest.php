<?php declare (strict_types=1);

namespace tests\Documents;

use PHPUnit\Framework\TestCase;
use App\Documents\CommandOutputDocument;

class CommandOutputDocumentTest extends TestCase
{
    public function testCanGetCommandResult()
    {
        $command = 'cat tests/data/balance.txt';
        $commandDocument = new CommandOutputDocument($command);
        
        $this->assertEquals(43, strlen($commandDocument->getContent()));
    }
}
