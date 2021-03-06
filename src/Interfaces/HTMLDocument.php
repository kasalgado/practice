<?php declare (strict_types=1);

namespace App\Interfaces;

class HTMLDocument implements Documentable
{
    protected $url;
    
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getContent()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        $html = curl_exec($ch);
        curl_close($ch);
        
        return $html;
    }

    public function getId(): string
    {
        return $this->url;
    }
    
    public function checkServerUp()
    {
        return php_sapi_name() === 'cli-server' ? true : false;
    }
}
