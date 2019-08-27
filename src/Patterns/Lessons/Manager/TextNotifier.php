<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Manager;

class TextNotifier extends Notifier
{
    public function inform(string $message): string
    {
        return 'Text notification: ' . $message;
    }
}
