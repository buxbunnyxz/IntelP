<?php

class Router
{
    private $routes = [];

    // Register a GET route
    public function get($uri, $action)
    {
        $this->addRoute('GET', $uri, $action);
    }

    // Register a POST route
    public function post($uri, $action)
    {
        $this->addRoute('POST', $uri, $action);
    }

    private function addRoute($method, $uri, $action)
    {
        $uri = '/' . trim($uri, '/');
        $this->routes[$method][$uri] = $action;
    }

    public function dispatch($method, $uri)
    {
        $uri = '/' . trim($uri, '/');
        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];
            return $this->callAction($action);
        }

        // 404
        http_response_code(404);
        echo "404 Not Found";
    }

    private function callAction($action)
    {
        if (is_callable($action)) {
            return $action();
        }

        if (is_string($action)) {
            [$controller, $method] = explode('@', $action);
            require_once __DIR__ . "/../app/Controllers/{$controller}.php";
            $obj = new $controller;
            return $obj->$method();
        }
    }
}
