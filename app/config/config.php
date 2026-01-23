<?php

class Database
{
    private string $dsn = 'mysql:host=localhost;dbname=app_ecommerce';
    private PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn, 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function connection(){
        return $this->pdo;
    }
}
