<?php


require_once("../Crud/Personnages.php");

Personnages::addPersonnage($_POST['name'], $_POST['health'], $_POST['power'], $_POST['weapon'], $_POST['role_id']);
header('Location: ../index.php');die;
