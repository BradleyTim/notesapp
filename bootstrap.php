<?php 

use Core\App;
use Core\Container; 
use Core\DB;

$container = new Container();
$container->bind('Core\DB', function() {
    $config = require base_dir("/config.php");
    $db = new DB($config['database']['dsn']); 
    return $db;
});

//$db = $container->resolve('Core/DB'); 
App::setContainer($container);
