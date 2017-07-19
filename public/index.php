<?php

require_once 'vendor/autoload.php';

use App\Model\Route;

$rota = new Route;

echo $rota->getUrl();