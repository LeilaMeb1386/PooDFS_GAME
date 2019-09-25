<?php

Class Personnages extends DataBase
{
  protected $name;
  protected $health;
  protected $power;
  protected $weapon;
  protected $role_id;

  //getters

  public function getName()
  {
    return $this->name;
  }
  public function gethealth()
  {
    return $this->health;
  }
  public function getPower()
  {
    return $this->power;
  }
  public function getWeapon()
  {
    return $this->weapon;
  }
  public function getRole_id()
  {
    return $this->role_id;
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
  public function setPower($power)
    {
      $this->power = $power;
    }

  public function setWeapon($weapon)
    {
      $this->weaper = $weaper;
    }
  public function setRole_id($role_id)
    {
      $this->role_id = $role_id;
    }

 //constructeur

 public function  __construct(string  $name, int $health, int $power, string $weapon, int $role_id)
   {
     $this->setName($name);
     $this->setHealth($health);
     $this->setPower($power);
     $this->setWeapon($weapon);
     $this->setRole_id($role_id);
   }

   public static function getAllPersonnage()
       {

         $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
         $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $request = $connec->prepare("select * from Personnages");
         $request->execute();
         $result = $request->fetchAll();

         return $result;

       }

    public static function addPersonnage(string $name, int $health, int $power, string $weapon, int $role_id){

        $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = $connec->prepare("INSERT INTO Personnages(name, health, power, weapon, role_id) VALUES (:name, :health, :power, :weapon, :role_id);");
        $request->bindParam(':name', $name);
        $request->bindParam(':health', $health);
        $request->bindParam(':power', $power);
        $request->bindParam(':weapon', $weapon);
        $request->bindParam(':role_id', $role_id);
        $request->execute();

      }

    public static function DeletePersonnage(int $id)
      {
        $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = $connec->prepare("DELETE FROM Personnages WHERE id = :id ;");
        $request->bindParam(':id', $id);
        $request->execute();
      }

    public static function UpdatePersonnage(int $id, string $name, int $health, int $power, string $weapon, int $role_id)
    {
      $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
      $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $request = $connec->prepare("UPDATE Personnages SET name = :name, health = :health, power = :power, weapon = :weapon, role_id = :role_id, WHERE id = :id ;");
      $request->bindParam(':id', $id);
      $request->bindParam(':name', $name);
      $request->bindParam(':health', $health);
      $request->bindParam(':power', $power);
      $request->bindParam(':weapon', $weapon);
      $request->bindParam(':role_id', $role_id);
      $request->execute();


    }



}
