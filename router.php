<?php 
require base_dir('/Response.php');
$routes = require base_dir('/routes.php'); 

$route = strval(url());

function abort($code=404) {
    http_response_code($code);

    require base_dir("/views/{$code}.php");

    die();
}

function route_to_controller($route, $routes) {
    if (array_key_exists($route, $routes)) {
        require base_dir('/' . $routes[$route]);
    } else {
        abort(Response::NOT_FOUND);
    }
}

route_to_controller($route, $routes);
