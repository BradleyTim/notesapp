<?php 

require __DIR__ . "/../core/functions.php"; 

spl_autoload_register(function ($class) {
    require base_dir("{$class}.php");
});

require base_dir('/core/router.php');

