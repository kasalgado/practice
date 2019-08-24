<?php declare (strict_types=1);

namespace tests\Documents;

use PHPUnit\Framework\TestCase;
use App\Interfaces\StreamDocument;

class StreamDocumentTest extends TestCase
{
    public function testCanGetStreamContent()
    {
        $filePath = __DIR__ . '/../data/balance.txt';
        $resource = fopen($filePath, 'r');
        $document = new StreamDocument($resource);
        
        $this->assertEquals(strlen(file_get_contents($filePath)), strlen($document->getContent()));
    }
}
