<?php 

require __DIR__ . "/../functions.php"; 

require base_dir('/router.php');
// require './../router.php';

require "DB.php";

$db = new DB();

$result = DB::query();
// dd($result);
foreach ($result as $post) {
    echo "<li>{$post['title']}: {$post['body']}</li>";
}
