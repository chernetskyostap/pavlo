<?php

namespace App;

class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = require 'routes.php';
    }

    public function isMatch(): bool
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $key => $route) {
            if ($key === $url) {
                $controller = 'App\Controllers\\' . $route['controller'];
                $function = $route['function'][$method] ?? null;
                if (!method_exists($controller, $function)) {
                    return false;
                }
                (new $controller())->$function();

                return true;
            }
        }
        return false;

    }
}