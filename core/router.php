<?php 
namespace Core;
use Core\Response;

class Router {
    protected $routes = [];

    public function add($uri, $controller, $method) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method'=> $method
        ];
        // $this->routes[] = compact('uri', 'controller', 'method'); 
    }

    public function get($uri, $controller) {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller) {
        $this->add($uri, $controller, 'POST');
    }

    public function patch($uri, $controller) {
        $this->add($uri, $controller, 'PATCH');
    }

    public function delete($uri, $controller) {
        $this->add($uri, $controller, 'DELETE');
    }

    public function route($uri, $method) {
        foreach($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {
                return require base_dir($route['controller']);
            } 
        }
        
        $this->abort(Response::NOT_FOUND);
    }

    protected function abort($code=404) {
        http_response_code($code);
    
        require base_dir("/views/{$code}.php");
    
        die();
    }
}

