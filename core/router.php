<?php

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];


    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        $parts = explode("?", $uri);
        $uri = $parts[0];

        if (array_key_exists($uri, $this->routes[$requestType])){


            $uri = explode('@', $this->routes[$requestType][$uri]);

            return $this->callAction($uri[0], $uri[1]);
        }

        throw new Exception('No route defined for this URI.');

    }
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)){
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return $controller->$action();
    }
}