<?php

namespace App\Database;

class Db
{
    protected $conn = null;

    public function __construct()
    {
        $config = require './db.php';
        $this->conn = new \PDO('mysql:dbname=' . $config['db'] . ';host=' . $config['host'],
            $config['user'],
            $config['password']
        );
    }

    public function query(string $sql): ?array
    {
        var_dump($sql);
        $query = $this->conn->prepare($sql);
        $result = $query->execute();

        if (!$result) {
            return null;
        }

        return $query->fetchAll();
    }
}