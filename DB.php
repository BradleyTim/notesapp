<?php 

class DB {
    public $pdo;
    public function __construct() {
        $this->pdo = new PDO('sqlite:/Users/macbook/Code/notesapp/database/database.sqlite');
    }
    public function query() {
        
        $statement = $this->pdo->prepare('select * from posts');
        $statement->execute();
        return $statement;
    }

    public function fetchall() {
        return $this->query()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch() {
        return $this->query()->fetch(PDO::FETCH_ASSOC);
    }
}