<?php

class Administrateur extends User
{
    private $id;

    private PDO $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connection();
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM produits";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findProduitById()
    {
        $sql = "SELECT * FROM produits WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function create()
    {
        $sql = "INSERT INTO produits (username, role, email, password) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->execute([$this->username, $this->role, $this->email, $this->password]);
    }

    public function update()
    {
        $sql = "UPDATE produits SET 'username =' . $this->username . 'role =' . $this->role . 'email =' . $this->email, 'password =' . $this->password,
                WHERE 'id =' . $this->id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$this->username, $this->role, $this->email, $this->password]);
    }
}
