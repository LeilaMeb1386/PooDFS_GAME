<?php
function __autoload($classname) {
  $filename = "./Crud/". $classname .".php";
  require_once($filename);
}

$roles = Roles::getAllRoles();

 // var_dump(Personnages::getAllPersonnage());
 // var_dump(Roles::getAllRoles());
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <ul>
        <li><a href="index.php">Personnages</a></li>
        <li>Supprimer un role</li>
        <li>Modifier un role</li>
      </ul>
    </header>
    <main>
  <h1>Roles</h1>
  <table>
 <tr>
   <th>ROLE</th>

 </tr>
 <?php
   foreach ($roles as $key => $value) {
     $tr = "<tr>";
     $tr .= "<td>" . $value['role'] . "</td>";
     $tr .= "</tr>";
     echo $tr;
   }
 ?>
</table>
<h1>Inserer un nouveau role</h1>
   <form action="./actions/insertRole.php" method="post">


                <label >ROLE</label>
                <input type='text'  name='role' title='role' />


            	<input type='submit' value='Ajouter' title='AJOUTER' />
          </form>
</maain>
  </body>
</html>
