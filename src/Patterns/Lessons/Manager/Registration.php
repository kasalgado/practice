<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Manager;

use App\Patterns\Lessons\Composition\Lesson;

class Registration
{
    public function register(Lesson $lesson, int $type): string
    {
        $notifier = Notifier::get($type);
        
        return $notifier->inform('New lesson cost '.$lesson->total());
    }
}
