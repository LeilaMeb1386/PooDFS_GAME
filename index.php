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
      if ($hero->getHealth() >0){
        if (rand(1 , 100) === 50) {
          $hero->Fatality($mechant);

        }else{

          $hero->hit($mechant);
        }
      }
      if ($mechant->getHealth() >0) {
        if ($mechant->getMana() >= 8 && $mechant->getHealth() >= 5)  {
          $mechant->Fatality($hero);
        }elseif ($mechant->getMana() >= 5) {
          $mechant->fireball($hero);


        }  else{
            $mechant->hit($hero);
          }
      }




    if ($hero->getHealth() <= 0) {
       echo $hero->getName() . " est mort <br>";
     } else if($mechant->getHealth() <= 0) {

       echo $mechant->getName() . " est mort <br>";

     }

    }
