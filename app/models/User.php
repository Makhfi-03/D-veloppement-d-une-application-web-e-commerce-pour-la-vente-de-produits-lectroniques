<?php

class User
{
    private int $id;
    private string $name;
    private string $role;
    private string $email;
    private string $password;
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

    public function getName()
    {
        return $this->name;
    }

    public function setusername($name)
    {
        $this->name = $name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function findAll()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById()
    {
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function create()
    {
        $sql = "INSERT INTO users (username, role, email, password) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->execute([$this->name, $this->role, $this->email, $this->password]);
    }

    public function update()
    {
        $sql = "UPDATE users SET 'username =' . $this->name . 'role =' . $this->role . 'email =' . $this->email, 'password =' . $this->password,
                WHERE 'id =' . $this->id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$this->name, $this->role, $this->email, $this->password]);
    }
}
