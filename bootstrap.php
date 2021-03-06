<?php

require "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;

$capsule->addConnection([

    "driver" => DB_CONNECTION,

    "port"=> DB_PORT,

    "host" => DB_HOST,

    "database" => DB_DATABASE,

    "username" => DB_USERNAME,

    "password" => DB_PASSWORD

]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
