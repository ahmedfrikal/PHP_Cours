<?php

namespace POO\Heritage;

class chien extends animal
{
    private $race;


    public function __construct($poids,$age, $race)
    {
        parent::__construct($age,$age);
        $this->race = $race;
    }


}