<?php

class DB
{
    private $pdo;

    public function __contsruct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $query = "SELECT * FROM $table";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
