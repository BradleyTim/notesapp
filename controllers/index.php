<?php 

use Core\DB;

require base_dir("/core/DB.php");

$config = require base_dir("/config.php");

$db = new DB($config['database']['dsn']);

$query = 'select * from posts';
// $query = 'select * from posts where id = :id';

$posts = $db->fetchall($query);
// $posts = $db->fetchall($query, [':id' => $_GET['id']]);

require base_dir("/views/index.view.php");

