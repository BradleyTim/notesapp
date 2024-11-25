<?php 

use Core\DB;

$config = require base_dir("/config.php");
$db = new DB($config['database']['dsn']);

$db->delete('delete from posts where id = :id', [':id' => $_POST['id']]);
header('location: /');
exit();


