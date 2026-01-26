<?php
class Commande{
    private $id;
    private DateTime $date_commande;
    private $status;
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getDate_commande()
    {
        return $this->date_commande;
    }
    public function setDate_commande($date_commande)
    {
        $this->date_commande = $date_commande;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}