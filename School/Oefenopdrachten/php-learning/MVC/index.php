<?php

$database = require '../MVC/Core/bootstrap.php';



$router = new Router;

require '../MVC/routes.php';

require $router->direct('');

$uri = trim($_SERVER['REQUEST_URI'], '/');




