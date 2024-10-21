<?php 

$routes = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/contact' => './controllers/contact.php',
];

$route = strval(url());

function abort($code=404) {
    http_response_code($code);

    require "./views/{$code}.php";

    die();
}

function route_to_controller($route, $routes) {
    if (array_key_exists($route, $routes)) {
        require $routes[$route];
    } else {
        abort(404);
    }
}

route_to_controller($route, $routes);
