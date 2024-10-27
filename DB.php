<?php 

class DB {
    public static function query() {
        $pdo = new PDO('sqlite:/Users/macbook/Code/notesapp/database/database.sqlite');
        $statement = $pdo->prepare('select * from posts');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}