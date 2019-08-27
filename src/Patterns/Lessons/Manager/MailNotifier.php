<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Manager;

class MailNotifier extends Notifier
{
    public function inform(string $message): string
    {
        return 'Mail notification: ' . $message;
    }
}
