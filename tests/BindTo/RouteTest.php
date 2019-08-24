<?php declare (strict_types=1);

namespace tests\BindTo;

use PHPUnit\Framework\TestCase;
use App\BindTo\Route;

class RouteTest extends TestCase
{
    public function testCanGetJsonResponse()
    {
        $route = new Route();
        $route->add('/users/kas', function () {
            $this->responseContentType = 'application/json;charset=utf8';
            $this->responseBody = '{"name": "Josh"}';
        });
        $responseBody = $route->dispatch('/users/kas');
        
        $this->assertEquals('Hello Malin', $responseBody);
    }
}
