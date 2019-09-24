<?php
class Character
{
    private $name;
    private $health;
    private $mana;
    private $weapon;
    public $isAlive = 1;

    //getters

    public function getName()
    {
      return $this->name;
    }

    public function gethealth()
    {
      return $this->health;
    }

    public function getMana()
    {
      return $this->mana;
    }

    public function getWeper()
      {
        return $this->weapon;
      }

    public function getIsalive()
      {
        return $this->isAlive;
      }

    //setters

    public function setName($name)
      {
        $this->name = $name;
      }

    public function setHealth($health)
      {
        $this->health = $health;
      }

    public function setMana($mana)
      {
        $this->mana = $mana;
      }

    public function setWeper($weapon)
      {
        $this->weapon = $weapon;
      }

    //constructeur
    public function  __construct($name, $health, $mana, $weapon)
      {
        $this->setName($name);
        $this->setHealth($health);
        $this->setMana($mana);
        $this->setWeper($weapon);
      }

    public function takeDamage($damage)
      {
        echo "$this->name reçoit $damage DMG<br>";
        $this->health -= $damage;
        $this->checkStatus();
      }

    public function checkStatus()
      {
          if($this->health > 0) {
            $this->isAlive = 1;
          } else {
            $this->isAlive = 0;
          }
      }

    public function hit($target)
    {
      $dmg = mt_rand(5, 10);
      echo "$this->name frappe $target->name avec  $this->weapon<br>";
      $target->takeDamage($dmg);
    }

    public function generateMana()
    {
      $mana = mt_rand(2, 10);
      echo "$this->name regenere $mana PDM<br>";
      $this->mana += $mana;
    }

    public function fireball($target)
    {
      $spentMana = 5;
      if(($this->mana - $spentMana) >= 0) {
        $dmg = mt_rand(1, 10);
        echo "$this->name lance une boule de feu sur $target->name<br>";
        $target->takeDamage($dmg);
        $this->mana -= $spentMana;
      } else {
        echo "$this->name echoue à lancer une boule de feu sur $target->name<br>";
      }
    }





}
