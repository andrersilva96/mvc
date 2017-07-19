<?php

namespace App\Model;

class Route
{
    private $routes;
    
    public function __construct()
    {
        
    }
    
    public function initRoutes()
    {
        $routes['home'] = ['route'=>'/', 'controller' => 'indexController',
            'action' => 'index'];

        $routes['contact'] = ['route'=>'/contact', 'controller' => 'indexController',
            'action' => 'contact'];
    }
    
    public function getUrl()
    {
        // obtendo as rotas
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}