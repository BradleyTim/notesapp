<?php 

$router->get('/', 'controllers/index.php');
// $router->delete('/', 'controllers/index.php');

$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/notes/create', 'controllers/note-create.php');