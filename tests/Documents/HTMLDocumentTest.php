<?php declare (strict_types=1);

namespace tests\Documents;

use PHPUnit\Framework\TestCase;
use App\Documents\HTMLDocument;

class HTMLDocumentTest extends TestCase
{
    public function testCanGetHTMLContent()
    {
        $url = 'http://localhost:8000/';
        $document = new HTMLDocument($url);
        
        $this->assertEquals($url, $document->getId());
        $this->assertContains('Your application is now ready', $document->getContent());
    }
}
