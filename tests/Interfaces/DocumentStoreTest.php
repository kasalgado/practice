<?php declare (strict_types=1);

namespace tests\Interfaces;

use PHPUnit\Framework\TestCase;
use App\Interfaces\DocumentStore;
use App\Interfaces\HTMLDocument;

class DocumentStoreTest extends TestCase
{
    public function testCanGetAddedDocument()
    {
        $htmlDocumentMock = $this->createMock(HTMLDocument::class);
        $htmlDocumentMock->method('getId')->with('localhost');
        $document = new DocumentStore($htmlDocumentMock);
        $results = $document->getDocuments();var_dump($results);
        
        $this->assertEquals('localhost', key($results['localhost']));
    }
}
