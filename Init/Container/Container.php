<?php

namespace Init\Container;

use App\Model\Conexao;

class Container
{
    public static function getModel($model)
    {
        $class = "App\\Model\\".ucfirst($model);
        return new $class(Conexao::getDb());
    }
}