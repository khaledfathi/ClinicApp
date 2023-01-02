<?php

namespace Clinicsys\Core\Core;
use Clinicsys\Core\Core\Route;
use Exception;

class Kernel{

    private $controller;

    private $method;

    private function url()
    {
        return $_SERVER['QUERY_STRING'];
    }

    public function run()
    {
       if(array_key_exists($this->url(),Route::$routes)){
        
        $this->controller = Route::$routes[$this->url()][0];
        $this->method = Route::$routes[$this->url()][1];
        
        call_user_func_array([new $this->controller,$this->method],[]);
  
    }else{
        throw new Exception("controller not found");
       }
    }
}

