<?php

include ("ville_model.php");
class ville_controllers{
    private $obj;
    public function __construct()
    {

        $this->obj=new villes();

    }

    public function findAll(){
        //$obj=new villes();
        $tab=$this->obj->findAll();
        include("villes_view.php");
    }
    public function findCommencant(){

        $tab=$this->obj->findCommencement("O");
        include("villes_view.php");
    }
}




