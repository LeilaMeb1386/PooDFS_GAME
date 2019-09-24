<?php
function __autoload($classname) {
  $filename = "./". $classname .".php";
  include_once($filename);
}
    require_once('./Classes/character.php');
    $hero = new Character("mario",50, 10, "kabouss");
    $mechant = new Character("Bowser",50, 10, "chefra");
    //var_dump($hero);
    while ($hero->isAlive === 1 && $mechant->isAlive === 1) {
      $hero->hit($mechant);
    if ($mechant->getMana() >= 5) {
      $mechant->fireball($hero);
    } else {
      $mechant->hit($hero);
    }
    if ($hero->getHealth() <= 0) {
       echo $hero->getName() . " est mort <br>";
     } elseif($mechant->getHealth() <= 0) {

       echo $mechant->getName() . " est mort <br>";

     }

    }
