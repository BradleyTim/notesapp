<?php 

require base_dir("/DB.php");

$config = require base_dir("/config.php");

$db = new DB($config['database']['dsn']);

$posts = $db->fetchall();

require base_dir("/views/index.view.php");

