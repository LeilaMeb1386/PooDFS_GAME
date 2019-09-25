<?php
function __autoload($classname) {
  $filename = "./Crud/". $classname .".php";
  require_once($filename);
}
$personnages = Personnages::getAllPersonnage();
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
  <h1>Liste des personnages</h1>
  <table>
 <tr>
   <th>NAME</th>
   <th>HEALTH</th>
   <th>POWER</th>
   <th>WEAPON</th>
   <th>ROLE</th>
 </tr>
 <?php
   foreach ($personnages as $key => $value) {
     $tr = "<tr>";
     $tr .= "<td>" . $value['name'] . "</td>";
     $tr .= "<td>" . $value['health'] . "</td>";
     $tr .= "<td>" . $value['power'] . "</td>";
     $tr .= "<td>" . $value['weapon'] . "</td>";
     $tr .= "<td>" . $value['role_id'] . "</td>";
     $tr .= "</tr>";
     echo $tr;
   }
 ?>
</table>
<h1>Inserer un nouveau joueur</h1>
   <form action="InsertPerso.php" method="post">


                <label >NAME</label>
                <input type='text'  name='name' title='name' />

                <label >HEALTH</label>
                <input type='number'  name='health' title='health' />

                <label >POWER</label>
                <input type='number'  name='power' title='power' />

                <label >WEAPON</label>
                <input type='text'  name='weapon' title='weapon' />

                <label >ROLE</label>
                <select class="" name="role_id">
                <?php
                  foreach ($roles as $role) {
                    $id = $roles['id'];
                    $role = $role['role'];
                    echo "<option value='$id'>$role</option>";
                  }
                ?>
              </select>

            	<input type='submit' value='Ajouter' title='AJOUTER' />
          </form>

  </body>
</html>
