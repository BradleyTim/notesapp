<?php 

use Core\Router;

require __DIR__ . "/../core/functions.php"; 

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_dir("{$class}.php");
});

require base_dir("bootstrap.php");

$router = new Router();
$routes = require base_dir("routes.php");
$uri = strval(url());
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
