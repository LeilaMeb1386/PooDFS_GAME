<?php
function __autoload($classname) {
  $filename = "./Classes/". $classname .".php";
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
    <header>
      <ul>
        <li><a href= "PageRole.php">Liste des roles</a></li>
      </ul>
    </header>
    <main>
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
   <form action="./actions/InsertPerso.php" method="post">


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
                    $id = $role['id'];
                    $role = $role['role'];
                    echo "<option value='$id'>$role</option>";
                  }
                ?>
              </select>

            	<input type='submit' value='Ajouter' title='AJOUTER' />
          </form>

    <h1>Supprimer ou modifier un personnage</h1>

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
       ?>
         <form action='./actions/deletePerso.php' method='POST'>
         <input type='hidden' name='id' value="<?=$value['id']?>">
         <tr>
           <td>
             <input type="text" name="name" value="<?= $value['name']?>">
           </td>
           <td>
             <input type="number" name="health" value="<?= $value['health']?>">
           </td>
           <td>
             <input type="number" name="power" value="<?= $value['power']?>">
           </td>
           <td>
             <input type="text" name="weapon" value="<?= $value['weapon']?>">
           </td>
           <td>
             <select name="role_id">
             <?php
               foreach ($roles as $role) {
                 $id = $role['id'];
                 $role = $role['role'];
               ?>
                <option value='<?= $id?>'
                    <?php if($id === $value['role_id']) { echo 'selected';} ?>
                  ><?= $role ?></option>";
                <?php
               }
             ?>
           </select>
           </td>
           <td><button type="submit" name="update"> Update </button></td>
           <td><button type="submit" name=delete> Delete </button></td>
         </tr>

         <?php
       }
     ?>

    </table>

  </form>




</maain>
  </body>
</html>
