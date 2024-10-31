<?php 

require base_dir("/DB.php");

$db = new DB();

$posts = $db->fetchall();

require base_dir("/views/index.view.php");

