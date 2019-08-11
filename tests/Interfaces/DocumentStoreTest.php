<?php declare (strict_types=1);

namespace tests\Documents;

use PHPUnit\Framework\TestCase;
use App\Interfaces\DocumentStore;
use App\Interfaces\StreamDocument;
use App\Interfaces\HTMLDocument;
use App\Interfaces\CommandOutputDocument;

class DocumentStoreTest extends TestCase
{
    public function testCanGetAddedDocument()
    {
        $resource = fopen(__DIR__ . '/../data/balance.txt', 'r');
        $document = new StreamDocument($resource);
        $documentStore = new DocumentStore($document);
        
        $this->assertCount(1, $documentStore->getDocuments());
    }
    
    public function testCanGetIdAndContentFromDocument()
    {
        $url = 'http://localhost:8000/';
        $document = new HTMLDocument($url);
        $documentStore = new DocumentStore($document);
        $documents = $documentStore->getDocuments();
        
        $this->assertEquals($url, key($documents));
    }
    
    public function testCanCreateShellCommand()
    {
        $commandDocumentMock = $this->createMock(CommandOutputDocument::class);
        $commandDocumentMock->method('getId')->willReturn('whoami');
        $commandDocumentMock->method('getContent')->willReturn('admin');
        $documentStore = new DocumentStore($commandDocumentMock);
        $documents = $documentStore->getDocuments();
        
        $this->assertTrue(key_exists('whoami', $documents));
    }
}
