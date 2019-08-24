<?php declare (strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController
{
    public function get()
    {
        $number = random_int(1, 10);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
