<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Manager;

abstract class Notifier
{
    public static function get(int $type): object
    {
        switch ($type) {
            case 1:
                return new MailNotifier();
                
            case 2:
                return new TextNotifier();
                
            case 3:
                return new SMSNotifier();
        }
    }
    
    abstract function inform(string $message): string;
}
