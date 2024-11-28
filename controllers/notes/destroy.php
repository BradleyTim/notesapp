<?php 

use Core\App;
use Core\DB;

//$db = App::container()->resolve("Core\DB");
$db = App::container()->resolve(DB::class);
// $db = App::resolve(DB::class);

$db->delete('delete from posts where id=:id', [':id' => $_POST['id']]);

header('location: /');
exit();
