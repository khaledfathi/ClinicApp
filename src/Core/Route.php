<?php
namespace Clinicsys\Core\Core; 

class Route
{
    public static $routes;
    public static $request;

    public static function Get(string $url,array $action)
    {
        if ($_SERVER['REQUEST_METHOD']); 
        self::$routes[$url] = $action;
    }
}

