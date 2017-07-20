<?php

namespace App\Model;

use Init\Bootstrap;

class Route extends Bootstrap
{
    // Rotas criadas
    protected function initRoutes()
    {
        $routes['home'] = ['route'=>'/', 'controller' => 'indexController',
            'action' => 'index'];

        $routes['contato'] = ['route'=>'/contato', 'controller' => 'indexController',
            'action' => 'contato'];
        
        $this->setRoutes($routes);
    }
}