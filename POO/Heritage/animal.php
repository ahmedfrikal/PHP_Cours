<?php

namespace POO\Heritage;

class animal
{
    protected $poids;
    protected $age;


    public function __construct($poids, $age)
    {
        $this->poids = $poids;
        $this->age = $age;
    }


}