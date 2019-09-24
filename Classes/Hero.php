<?php
  require_once('character.php');
  Class Hero extends Character
  {
    private $Bouclier;

    public function getBouclier()
    {
      return $this->Bouclier;
    }

    public function setBouclier($Bouclier)
      {
        $this->Bouclier = $Bouclier;
      }

      public function  __construct($name, $health, $mana, $weapon, $Bouclier)
        {
          $this->setName($name);
          $this->setHealth($health);
          $this->setMana($mana);
          $this->setWeper($weapon);
          $this->setBouclier($Bouclier);
        }

        public function Bouclier($target)
       {
         echo "$this->name sort son $this->Bouclier et se protege de l'attaque de son enemi $target->name <br>";
         $this->health += 10;
         $target->health -= 10;
       }

  }
