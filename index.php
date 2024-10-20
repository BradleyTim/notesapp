<?php 

require "functions.php";

$routes = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/contact' => './controllers/contact.php',
];

$route = strval(url_is());

function route_to_key($route, $routes) {
    // if ($route === '/') {
    //     require $routes['/'];
    // } elseif ($route === '/about') {
    //     require $routes['/about'];
    // } else {
    //     require $routes['/contact'];
    // }

    if (array_key_exists($route, $routes)) {
        require $routes[$route];
    }
}

route_to_key($route, $routes);
