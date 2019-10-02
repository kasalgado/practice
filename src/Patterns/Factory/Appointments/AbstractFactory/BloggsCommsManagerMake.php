<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

class BloggsCommsManagerMake extends CommsManagerMake
{
    public function getHeaderText(): string
    {
        return 'Blogss header text';
    }
    
    public function getFooterText(): string
    {
        return 'Blogss footer text';
    }

    public function make(int $flag): object
    {
        switch ($flag) {
            case self::TYPE_APPT:
                return new BloggsApptEncoder();
                
            case self::TYPE_TTD:
                return new BloggsTtdEncoder();
                
            case self::TYPE_CONTACT:
                return new BloggsContactEncoder();
        }
    }
}
