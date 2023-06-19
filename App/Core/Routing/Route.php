<?php
namespace App\Core\Routing;

class Route
{
    private static $Routes;
    public static function AddRoute($method,$uri)
    {
     self::$Routes[] = ['method' => $method,'uri' => $uri];
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
      return self::$Routes;
    }
    
}