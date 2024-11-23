<?php 

require __DIR__ . "/../core/functions.php"; 

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_dir("{$class}.php");
});

require base_dir('/core/router.php');

