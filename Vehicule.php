<?php
class Vehicule
{
  //attribut qui sont des variables da,s une get_declared_classes
   private $nbrRoue ;
   public $color ;
   private $assistDirection ;
   private $energie ;
   public $essence ;


 //methodes qui sont des fonctions dans une classe

 //getters
   public function getNbrRoue(): ?int
   {
     return$this->nbrRoue;
   }

   public function getColor(): ?string
   {
     return  $this->color;
   }

   public function getAssistDirection(): ?bool
   {
     return$this->assistDirection;
   }

   public function getEnergie(): ?string
   {
     return  $this->energie;
   }

    public function getEssence()
    {
      return $this->essence;
    }
    //end getters


    public function honk()
    {
      echo "bip bip ";
    }
    //setters
    public function setNbrRoue($nbrRoue)
    {
      $this->nbrRoue = $nbrRoue;
    }

    public function setColor($color)
    {
       $this->color = $color;
    }

    public function setAssistDirection($assistDirection)
    {
      $this->assistDirection = $assistDirection;
    }

    public function setEnergie($energie)
    {
      $this->energie = $energie;
    }

     public function setEssence($essence)
     {
       $this->essence = $essence;
     }
    //end setters

    //creer un constructeur
    public function __construct($nbrRoue, $color, $assistDirection, $energie, $essence)
    {
      $this->setNbrRoue($nbrRoue);
      $this->setColor($color);
      $this->setAssistDirection($assistDirection);
      $this->setEnergie($energie);
      $this->setEssence($essence);


    }

  }

  //créer un objet

//$car = new Vehicule;
//var_dump($car);


//faire sonner ma voiture:
// $car->honk();
// echo $car->getColor();
//$car2 = new Vehicule;
//$motocycle = new Vehicule;
//echo $car2->getColor();


//tp
//créer une méthode qui devra prendre en argument un autre objet de type vehicuke
// faire en sorte que $car puisse transférer toute essence a $car2
//afficher le niveau d'essence de ces deux vehicules
// echo $car->getEssence();
// echo $car->getNbrRoue();
// echo $car->getEnergie();
// echo $car->getAssistDirection();

//Afficher tous les attributs de ma voiture :D
// if ($car->getAssistDirection() == 1) {
//   $reponse = "oui" ;
// } else {
//   $reponse = "non";
// }
// echo "<br> Ma voiture a " .$car->getNbrRoue() . " roues, est de couleur " . $car->getColor() . " ... direction assitée ? " . $reponse . ". Elle a un moteur " . $car->getEnergie() . " est un niveau d'essence à " . $car->getEssence() . " litres";

//utiliser les setter
$motocycle = new Vehicule(2, "rouge pistache", false, "elecrtic", 100);
echo "ma moto possede " . $motocycle->getNbrRoue() . "roues et est de couleur : " .$motocycle->getColor();
