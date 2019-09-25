<?php


require_once("../Crud/Roles.php");

Roles::addRole($_POST['role']);
header('Location: ../PageRole.php');die;
