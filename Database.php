<?php


class Databse {

    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'francis', 'mansnothot');
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}

