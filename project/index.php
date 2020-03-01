<?php

require 'vendor/autoload.php';

use App\Router;

session_start();

$router = new Router;
if (!$router->isMatch()) {
    die('Wrong URL!');
}
