<?php

define('BASEPATH', true);
require 'config.php';
require 'vendor/autoload.php';
//require 'config/autoload.php';

use Config\Router;
use Config\Helper;

$router = new Router();
$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

if(Helper::validateController ($controller)){
    $controller = 'ErrorPage';
}

$controller .= 'Controller';
$controller = PATH_CONTROLLERS ."\\{$controller}";

if(!Helper::validateMethodController($controller, $method)) {
    $method = 'exec';
}

$controller = new $controller();
$controller->$method($param);
