<?php

namespace App\Model;

class Conexao
{
    public static function getDb(){
        return new \PDO('mysql:host=localhost;dbname=pdo', 'root', 'root');
    }
}