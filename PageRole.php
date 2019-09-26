<?php
function __autoload($classname) {
  $filename = "./Classes/". $classname .".php";
  require_once($filename);
}
require_once('./templates/head.html');
$roles = Roles::getAllRoles();

 // var_dump(Personnages::getAllPersonnage());
 // var_dump(Roles::getAllRoles());
 ?>


    <header>
      <ul>
        <li><a href="index.php">Voir la listes des Personnages</a></li>
      </ul>
    </header>
    <main>
     <div class="liste">
      <h1>Roles</h1>
      <table class="t">
     <tr>
       <th class="ro">ROLE</th>

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
  </div>

  <div class="Insert">
    <h1>Inserer un nouveau role</h1>
       <form action="./actions/insertRole.php" method="post">

            <label >ROLE</label>
            <input type='text'  name='role' title='role' />

        	 <input type='submit' value='Ajouter' title='AJOUTER' />
      </form>
    </div>


              <h1>Supprimer ou modifier un role</h1>
              <div class="update">

                <table>
               <tr>
                 <th>ROLE</th>

               </tr>
               <?php
                 foreach ($roles as $key => $value) {
                 ?>
                   <form action='./actions/deleteRole.php' method='POST'>
                   <input type='hidden' name='id' value="<?=$value['id']?>">
                   <tr>
                     <td>
                       <input type="text" name="role" value="<?= $value['role']?>">
                     </td>

                     </td>
                     <td><button type="submit" name="update"> Update </button></td>
                     <td><button type="submit" name=delete> Delete </button></td>
                   </tr>

                   <?php
                 }
               ?>

              </table>

            </form>
          </div>
</maain>
<?php
  require_once('./templates/footer.html');
?>
