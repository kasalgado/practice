<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Manager;

class SMSNotifier extends Notifier
{
    public function inform(string $message): string
    {
        return 'SMS notification: ' . $message;
    }
}
