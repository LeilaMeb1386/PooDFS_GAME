<?php
  require_once('character.php');
  Class Mechant extends Character
  {
    public function fireball($target)
    {
      $spentMana = 5;
      if(($this->mana - $spentMana) >= 0) {
        $dmg = mt_rand(1, 10);
        echo "$this->name Lance des petits bowsser en feu  sur $target->name<br>";
        $target->takeDamage($dmg);
        $this->mana -= $spentMana;
      } else {
        echo "$this->name echoue à lancer une boule de feu sur $target->name<br>";
      }
    }

    public function generateMana()
    {
      $mana = mt_rand(2, 10);
      echo "$this->name regenere $mana PDM<br>";
      $this->mana += $mana;
    }

  }
