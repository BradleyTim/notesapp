<?php 
require base_dir("/core/Validator.php");
require base_dir("/DB.php");

$config = require base_dir("/config.php");
$db = new DB($config['database']['dsn']); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (Validator::string($_POST['title'], 1, 255) && Validator::string($_POST['body'], 1, 1000)) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $query = "insert into posts (title, body) values (:title, :body)";
        $db->insert($query, [':title' => $title, ':body' => $body]);
        header('location:/');
        exit();
    }
}

require base_dir("/views/create.view.php");