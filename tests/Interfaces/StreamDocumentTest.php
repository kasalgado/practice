<?php declare (strict_types=1);

namespace tests\Documents;

use PHPUnit\Framework\TestCase;
use App\Interfaces\StreamDocument;

class StreamDocumentTest extends TestCase
{
    public function testCanGetStreamContent()
    {
        $resource = fopen(__DIR__ . '/../data/balance.txt', 'r');
        $document = new StreamDocument($resource);
        
        $this->assertEquals(46, strlen($document->getContent()));
    }
}
