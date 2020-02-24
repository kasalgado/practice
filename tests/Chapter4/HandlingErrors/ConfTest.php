<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Chapter4\HandlingErrors\Conf;

class ConfTest extends TestCase
{
    private $conf;
    
    public function setUp()
    {
        $file = __DIR__.'/conf.xml';
        $this->conf = new Conf($file);
    }

        public function testCanGetValueByKey()
    {
        $this->assertEquals('bob', $this->conf->get('user'));
        $this->assertEquals('newpass', $this->conf->get('pass'));
        $this->assertEquals('localhost', $this->conf->get('host'));
    }
    
    public function testCanSetValueByKey()
    {
        $this->conf->set('foo', 'bar');
        $this->conf->set('user', 'kas');
        
        $this->assertEquals('bar', $this->conf->get('foo'));
        $this->assertEquals('kas', $this->conf->get('user'));
    }
}
