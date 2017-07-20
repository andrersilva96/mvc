<?php

namespace Init;

abstract class Bootstrap
{
    private $routes;
    
    // Inicia a aplicacao
    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }
    
    // Rotas criadas
    abstract protected function initRoutes();
    
    protected function run($url)
    {
        // Verifica se existe rota
        array_walk($this->routes, function($route) use($url){
            if($url == $route['route']){
                $class = "App\\Controller\\".ucfirst($route['controller']);
                // Passando o endereco da classe
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }
    
    protected function getUrl()
    {
        // obtendo as rotas
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}