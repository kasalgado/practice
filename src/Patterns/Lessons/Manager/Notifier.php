<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Manager;

abstract class Notifier
{
    public static function get(int $type): object
    {
        return $type === 1 ? new MailNotifier() : new TextNotifier();
    }
    
    abstract function inform(string $message): string;
}
