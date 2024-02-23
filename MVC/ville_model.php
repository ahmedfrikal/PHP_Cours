<?php

class villes
{
    private $pdo;
    public function __construct()
    {
        include("connexion.php");
        $this->pdo=$pdo;
    }

    public function findAll(){

        $query = "select * from villes";
        $result = $this->pdo->query($query);
        $tab = $result->fetchAll();
        return $tab;
    }
    public function findCommencement($char)
    {
        $query = "select * from villes where libelle like '$char%' ";
        $result = $this->pdo->query($query);
        $tab = $result->fetchAll();
        return $tab;
    }
}

