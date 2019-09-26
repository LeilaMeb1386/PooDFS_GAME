<?php

 abstract Class DataBase
{
  Const DB = "mysql:dbname=PooCharacters";
  Const DBuser ='root';
  Const DBpw = '0000';
  Const utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');


//classe  abstraite
//une classe abstraite peut contenir des méthodes abstraites et doit obligatoirement être étendue pour utiliser ses fonctionnalités.

  abstract public function setid($id);

}
