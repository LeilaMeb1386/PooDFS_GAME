<?php
//update et supprimer Roles

require_once("../Classes/Roles.php");
if(isset($_POST['update']))
 Roles::UpdateRole($_POST['id'], $_POST['role']);

if(isset($_POST['delete']))
  Roles::Deleterole($_POST['id']);
header('Location: ../PageRole.php');die;
