<?php

require_once './class/Character.php';

class Mage extends Character{
    public function __construct($username){
        parent::__construct($username);
    
        $this->setHp($this->getHp() * 0.5);
        $this->setStrength($this->getStrength() * 1.5);
    }
}