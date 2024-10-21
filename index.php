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
    } else {
        http_response_code(404);

        echo 'Sorry! Page not found. Go back to Home.';

        die();
    }
}

route_to_key($route, $routes);
