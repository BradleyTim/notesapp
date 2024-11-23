<?php 

namespace Core;

use PDO;
class DB {
    public $pdo;
    public function __construct($dsn) {
        $this->pdo = new PDO($dsn);
    }
    public function query($query, $params=[]) {
        $statement = $this->pdo->prepare($query, $params);
        $statement->execute();
        return $statement;
    }
    public function insert($query, $params=[]) {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    public function fetchall($query, $params=[]) {
        return $this->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch($query, $params=[]) {
        return $this->query($query)->fetch(PDO::FETCH_ASSOC);
    }
}