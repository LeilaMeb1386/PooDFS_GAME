
<?php
function dd($t){
    echo var_dump($t);die;
}
//methode de philou
class Vehicule
{
    private $wheels = 4;
    private $color = 'black';
    private $assistedDirection = true;
    private $energy = 'Diesel';
    public $levelEssence = 50;

    public function honk()
    {
        echo "vroum";
    }

    public function getColor():string
    {
        return $this->wheels;
    }

    public function getEssence()
    {
        $giveEssence = $this->levelEssence;
        $this->levelEssence = $this->levelEssence-$giveEssence;
        return $giveEssence;
    }

    public function pump(Vehicule $vehicule)
    {
        $this->levelEssence = $this->levelEssence+$vehicule->getEssence();
    }
}

$car = new Vehicule;
$car2 = new Vehicule;
$car->pump($car2);
echo 'voiture 1 : '.$car->levelEssence.' litres';
echo '<br>';
echo 'voiture 2 : '.$car2->levelEssence.' litres';
