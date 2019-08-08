<?php declare (strict_types=1);

namespace tests\Interfaces;

use PHPUnit\Framework\TestCase;
use App\Interfaces\HTMLDocument;

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
