<?php

require_once('DataBase.php');
Class Roles extends DataBase
{
  protected $role;

  //getters

  //methode abstraite
  public function setid($id)
  {
    $this->id = $id;
  }

  public function getRole()
  {
    return $this->role;
  }

  //setters

  public function setRole($role)
    {
      $this->role = $role;
    }

  //constructeur

   public function  __construct(string $role)
     {
       $this->setRole($role);
     }

     public static function getAllRoles()
         {

           $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
           $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $request = $connec->prepare("select * from Roles");
           $request->execute();
           $result = $request->fetchAll();

           return $result;

         }

     public static function addRole(string $role){

         $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
         $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $request = $connec->prepare("INSERT INTO Roles(role) VALUES (:role)");
         $request->bindParam(':role', $role);
         $request->execute();

       }

   public static function Deleterole(int $id)
   {
     $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
     $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $request = $connec->prepare("DELETE FROM Roles WHERE id = :id ;");
     $request->bindParam(':id', $id);
     $request->execute();
   }

   public static function UpdateRole(int $id, string $role)
   {
     $connec = new PDO(self::DB, self::DBuser, self::DBpw, self::utf8);
     $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $request = $connec->prepare("UPDATE Roles SET role = :role WHERE id = :id ;");
     $request->bindParam(':id', $id);
     $request->bindParam(':role', $role);
     $request->execute();


   }




}
