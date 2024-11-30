<?php 
use Core\App;
use Core\DB;

$db = App::container()->resolve(DB::class);

$errors = [];

$query = 'select * from posts where id = :id';

$post = $db->fetch($query, [':id' => intval($_GET['id'])]);

dd($post);

require base_dir("views/edit.view.php");