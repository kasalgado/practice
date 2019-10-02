<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

class BloggsCommsManager extends CommsManager
{    
    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder;
    }

    public function getContacttEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder;
    }

    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdEncoder;
    }

    public function getHeaderText(): string
    {
        return 'Blogss header text';
    }
    
    public function getFooterText(): string
    {
        return 'Blogss footer text';
    }
}
