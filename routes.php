<?php 

$router->get('/', 'controllers/notes/index.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->get('/notes/create', 'controllers/notes/create.php');


$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
