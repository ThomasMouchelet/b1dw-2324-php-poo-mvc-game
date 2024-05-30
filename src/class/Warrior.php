<?php

require_once './class/Character.php';

class Warrior extends Character{

    public function __construct($username){
        parent::__construct($username);

        $this->setHp($this->getHp() * 1.5);
        $this->setStrength($this->getStrength() * 0.8);
    }
    
}