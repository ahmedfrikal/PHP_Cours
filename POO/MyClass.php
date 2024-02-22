<?php

namespace POO;

class MyClass
{
    public   $id;

    public function __construct($id)
    {
       $this->id=$id;
    }

    private function Afficher()
    {

    }
    public function __destruct()
    {
        echo "je suis le destructeur".$this->returnLigne();
    }
    public function __call($name, $arguments)
    {
        echo "Appele methode  $name inaccessibles ";
        //Dédie au methode prive ou n'esxiste pas;

    }
    public function __get($name)
    {
        echo "attribut $name est priveé";
        //Dédie au attribut;
    }
    /*la diff entre get et call c'est que call pour apple des methode et get pour les attribut  */

    public function __set($name, $value)
    {
        echo "impossible d'affecter $value à $name car n'est pas accesible inaccessibles  ";
    }
    public function __clone()
    {
        // cloner Object
    }
    public function __sleep()
    {
        // Serialize objet
    }
    public function __wakeup()
    {
        // contraire de slep
    }
    public function __serialize()
    {
        return array("id"=>$this->id);
    }
    public function __unserialize(array $data)
    {
        $this->id=$data[0];
    }
    public function __toString()
    {
        return "Id :".$this->id;
        //Apple $myClass=new MyClass(1);
        //
        //echo '<br>';
        //echo  $myClass;
    }
    public function __unset($name)
    {
        echo "$name";
        //Permet de detruie l'objet mais si attribut n'est pas accesible ou bien n'existe pas apple cette methode
    }
    public function __isset($name)
    {
        // Verifier si attribut  existe ou non  ;
    }
}
$myClass=new MyClass(1);
var_dump(isset($myClass->nom));
echo '<br>';
echo  $myClass;


