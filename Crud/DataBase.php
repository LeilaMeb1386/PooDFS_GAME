<?php
Class DataBase
{
  Const DB = "mysql:dbname=PooCharacters";
  Const DBuser ='root';
  Const DBpw = '0000';
  Const utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

}
