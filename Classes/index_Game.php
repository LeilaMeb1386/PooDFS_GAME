<?php
function __autoload($classname) {
  $filename = "./Classes/". $classname .".php";
  require_once($filename);
}
    // require_once('./Classes/character.php');
    // require_once('./Classes/Hero.php');
    // require_once('./Classes/Mechant.php');
    $hero = new Hero("mario",50, 10, "kabouss", "Bouclier magique");
    $mechant = new Mechant("Bowser",50, 10, "chefra");
    //var_dump($hero);
    while ($hero->getIsalive() === 1 && $mechant->getIsalive() === 1) {
      if ($hero->getHealth() >0){
        if (rand(1 , 100) === 50) {
          $hero->Fatality($mechant);

        } elseif ($hero->getHealth() < 5 && $hero->getHealth() >= 1) {
          $hero->Bouclier($mechant);
        } else{

          $hero->hit($mechant);
        }
      }
      if ($mechant->getHealth() >0) {
        if ((rand(1 , 100) === 50) && ($mechant->getMana() >= 8 && $mechant->getHealth() >= 5))  {
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


//attribut statique
     // echo Character::blabla();

    }
