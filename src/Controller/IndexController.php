<?php

namespace App\Controller;

use Init\Controller\Action;
use Init\Container\Container;

class IndexController extends Action
{

    public function index()
    {
        $produto = Container::getModel('Produto');
        
        $this->view->produtos = $produto->listaTodos();
        $this->render(__FUNCTION__);
    }
    
    public function contato()
    {
        $produto = Container::getModel('Produto');
        
        $this->view->produtos = $produto->procuraUm(1);
        $this->render(__FUNCTION__);
    }
    
}