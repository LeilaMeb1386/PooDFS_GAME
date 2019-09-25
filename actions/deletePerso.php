<?php
//update et supprimer personnage

require_once("../Classes/Personnages.php");
if(isset($_POST['update']))
  Personnages::UpdatePersonnage($_POST['name'], $_POST['health'], $_POST['power'], $_POST['weapon'], $_POST['role_id'], $_POST['id']);

if(isset($_POST['delete']))
  Personnages::DeletePersonnage($_POST['id']);
header('Location: ../index.php');die;
