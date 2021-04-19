<?php declare (strict_types=1);

namespace App\BindTo;

class Route
{
    /** @var array */
    private $routes = [];
    
    /** @var string */
    private $responseStatus = '200 OK';
    
    /** @var string */
    private $responseContentType = 'text/html';
    
    /** @var string */
    private $responseBody = 'Hello Malin';
    
    public function add(string $routePath, object $routeCallback): void
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
    }
    
    public function dispatch(string $currentPath): string
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath === $callback) {
                $callback();
            }
        }
        
//        header('HTTP/1.1' . $this->responseStatus);
//        header('Content-type:' . $this->responseContentType);
//        header('Content-length:' . mb_strlen($this->responseBody));
        
        return $this->responseBody;
    }
}
