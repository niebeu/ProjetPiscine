<?php

$database="projetpiscine";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);


//$nom= isset($_GET['nom'])? $_GET["nom"]: "";
//echo $nom;
//$nom= ('SELECT * FROM utilisateur WHERE nom=?');


?>

<!DOCTYPE html>
<html>
    <head>
    	<title>Mypage</title>
       <meta charset="utf-8" />

     </head>
     <body>
      <div align="left">
        <h1>Mon Profil :</h1>
        <br>
        Nom : <?php// echo  $nom;    ?>
        <br>
        Prénom :

            <?php
            if(isset($erreur))
            {

                echo '<font color="red">'.$erreur.'</font>';
            }
            ?>

    </div>

     </body>
</html>