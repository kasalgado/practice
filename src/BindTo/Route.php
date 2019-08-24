<?php declare (strict_types=1);

namespace App\BindTo;

class Route
{
    /** @var string */
    private $routes = [];
    
    /** @var string */
    private $responseStatus = '200 OK';
    
    /** @var string */
    private $responseContentType = 'text/html';
    
    /** @var string */
    private $responseBody = 'Hello Malin';
    
    public function add($routePath, $routeCallback)
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
    }
    
    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath == $callback) {
                $callback();
            }
        }
        
        // header('HTTP/1.1' . $this->responseStatus);
        // header('Content-type:' . $this->responseContentType);
        // header('Content-length:' . mb_strlen($this->responseBody));
        
        return $this->responseBody;
    }
}
