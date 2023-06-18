<?php
namespace App\Core\Routing;

class Route
{
    public static $routes;
    public static function AddRoute($method,$uri)
    {
     self::$routes[] = ['method' => $method,'uri' => $uri];
    }

    public static function get($method,$uri)
    {
        self::AddRoute($method,$uri);
    }

    public static function post($method,$uri)
    {
        self::AddRoute($method,$uri);
    }

    public static function routes()
    {
        echo json_encode(self::$routes);
    }
    
}