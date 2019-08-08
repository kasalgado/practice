<?php declare (strict_types=1);

namespace tests\Interfaces;

use PHPUnit\Framework\TestCase;
use App\Interfaces\StreamDocument;

class StreamDocumentTest extends TestCase
{
    public function testCanGetStreamContent()
    {
        $resource = fopen(__DIR__ . '/../data/balance.txt', 'r');
        $document = new StreamDocument($resource);
        
        var_dump($document->getId(), $document->getContent());
    }
}
