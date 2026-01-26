<?php

class AdminController
{
    public function addProduct()
    {
        $produit = new Produit();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $produit->setName($_POST['name']);
            $produit->setDescription($_POST['description']);
            $produit->setPrice($_POST['price']);
            $produit->setStock($_POST['stock']);
        }
    }
}
