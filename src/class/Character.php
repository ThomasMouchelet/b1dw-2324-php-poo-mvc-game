<?php

abstract class Character {
    private $username;
    private $hp;
    private $lvl;
    private $xp;
    private $strength;

    public function __construct($username) {
        $this->setUsername($username);
        $this->setHp(100);
        $this->setXp(0);
        $this->setLvl(1);
        $this->setStrength(50);
    }

    public function log(){
        echo "<br>";
        echo "Username : " . $this->getUsername();
        echo "<br>";
        echo "HP : " . $this->getHp();
        echo "<br>";
        echo "LVL : " . $this->getLvl();
        echo "<br>";
        echo "XP : " . $this->getXp();
        echo "<br>";
        echo "Strength : " . $this->getStrength();
        echo "<br>";
    }


    /**
     * Attack target cahracter
     * 
     * @param Character $target
     */
    public function attack(Character $target) {
        if($target->getHp() > 0){
            $target->setHp($target->getHp() - $this->getStrength());
            
            $this->increaseXp();

            if($target->getHp() <= 0){
                $target->setHp(0);   
            }
        } elseif($target->getHp() <= 0){
            echo "<br> " . $target->getUsername() . " est mort !";
        }
    }

    public function increaseLvl(){
        $this->setLvl($this->getLvl() + 1);
        $this->setXp($this->getXp() - 100);
    }
    public function increaseXp(){
        $this->setXp($this->getXp() + 80);
        
        if($this->getXp() >= 100) $this->increaseLvl();
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of lvl
     */ 
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set the value of lvl
     *
     * @return  self
     */ 
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get the value of xp
     */ 
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set the value of xp
     *
     * @return  self
     */ 
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get the value of strength
     */ 
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of strength
     *
     * @return  self
     */ 
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }
}