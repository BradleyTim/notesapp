<?php 

use Core\DB;
use Core\Validator;

require base_dir("/core/Validator.php");
require base_dir("/core/DB.php");

$config = require base_dir("/config.php");
$db = new DB($config['database']['dsn']); 

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['title'], 1, 255)) {
        $errors['title'] = 'A title of not more than 255 characters must be provided';
    }

    if(!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of not more than 1000 characters must be provided';
    }

    if (empty($errors)) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $query = "insert into posts (title, body) values (:title, :body)";
        $db->insert($query, [':title' => $title, ':body' => $body]);
        header('location:/');
        exit();
    }

}

require base_dir("/views/create.view.php");