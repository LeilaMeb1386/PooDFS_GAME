<?php


require_once("../Classes/Roles.php");

Roles::addRole($_POST['role']);
header('Location: ../PageRole.php');die;
