<?php 

require "functions.php";

$routes = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/contact' => './controllers/contact.php',
];

$route = strval(url());

function route_to_key($route, $routes) {
    if (array_key_exists($route, $routes)) {
        require $routes[$route];
    }
}

route_to_key($route, $routes);
