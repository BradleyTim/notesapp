<?php 

require base_dir("/DB.php");

$config = require base_dir("/config.php");

$db = new DB($config['database']['dsn']); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['title']) && isset($_POST['body'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $query = "insert into posts (title, body) values (:title, :body)";
        $db->insert($query, [':title' => $title, ':body' => $body]);
        header('/');
        die();
    }
}

require base_dir("/views/create.view.php");