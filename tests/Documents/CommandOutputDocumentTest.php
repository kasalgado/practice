<?php declare (strict_types=1);

namespace tests\Documents;

use PHPUnit\Framework\TestCase;
use App\Documents\CommandOutputDocument;

class CommandOutputDocumentTest extends TestCase
{
    public function testCanGetCommandResult()
    {
        $commandDocumentMock = $this->createMock(CommandOutputDocument::class);
        $commandDocumentMock->method('getContent')->willReturn('admin');
        
        $this->assertEquals('admin', $commandDocumentMock->getContent());
    }
}
