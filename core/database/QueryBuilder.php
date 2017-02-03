<?php

Class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

//    public function selectMaxId($table)
//    {
//        $statement = $this->pdo->prepare("SELECT max(id) from {$table}");
//
//        $statement->execute();
//
//        return $statement->fetch(PDO::FETCH_CLASS);
//    }
}