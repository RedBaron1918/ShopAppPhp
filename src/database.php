<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    "driver" => "mysql",
    "host" => "localhost",
    "username" => "root",
    "password" => "",
    "database" => "shop_development",
    "charset" => "utf8",
    "collation" => "utf8_general_ci",
    "prefix" => ""
]);

$capsule->bootEloquent();