<?php

class Client extends User
{
    private $id;
    private $panier;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPanier()
    {
        return $this->panier;
    }

    public function setPanier($panier)
    {
        $this->panier = $panier;
    }
}
