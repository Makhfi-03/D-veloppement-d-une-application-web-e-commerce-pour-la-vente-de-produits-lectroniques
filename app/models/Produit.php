<?php

class Produit
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $stock;
    private $image;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }
     public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function AllProduct()
    {
        $sql = "SELECT * FROM produits";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Produit::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findProductById()
    {
        $sql = "SELECT * FROM produits WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function createProduct()
    {
        $sql = "INSERT INTO produits (name, description, price, stock) VALUES (?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->execute([$this->name, $this->description, $this->price, $this->stock]);
    }

    public function update()
    {
        $sql = "UPDATE users SET 'name =' . $this->name . 'description =' . $this->description . 'price =' . $this->price, 'stock =' . $this->stock,
                WHERE 'id =' . $this->id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$this->name, $this->description, $this->price, $this->stock]);
    }
}
