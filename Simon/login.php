<?php

//identifier la BDD
$database="projetpiscine";

//connecter l'utilisateur dans la BDD
//votre serveur = localhost
//votre login = root (administrateur)
// votre mdp = <rien>
$db_handle = mysqli_connect('localhost','root','');

$db_found = mysqli_select_db($db_handle,$database);



//si BDD existe 
if($db_found){

         $sql ="SELECT * FROM utilisateur ";
         $sqlLogin="SELECT `adresse` FROM `utilisateur` WHERE 1 ";
         $erreur= "";
         //Recupération des données rentrée 
			$login=isset($_POST["adresse"])? $_POST["adresse"]: "";
			$mdp=isset($_POST["mdp"])? $_POST["mdp"]: "";

         $result = mysqli_query($db_handle,$sql);
         while($data = mysqli_fetch_assoc($result))
         {
         	
         	if( $login==$data['adresse']&& $mdp==$data['mdp'] )
                 { 
                 	$erreur=  "Vous etes connecté";
                 }
             else
             	{

            		$erreur =  "Inexistant dans la BDD";
         		}


         }
}
else {
         echo "Database not found";
}
//fermer la connection
mysqli_close($db_handle);






?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
       <meta charset="utf-8" />

     </head>
     <body>
      <div align="center">
       <h1>Connexion</h1>
       <form action="login.php" method="post">
        
        <table>
             <tr>
            <td align="right">Mail :</td>
            <td> <input type="text"  placeholder="Votre mail" name="adresse"></td><br><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>

          <tr>
            <td align="right">Mot de passe :</td>
            <td> <input type="password" placeholder="Votre mot de passe"  name="mdp"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>

<tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
          <tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <td></td>
            <td align="left"><input type="submit" value="Envoyer"></td>
          </tr>

          <tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
          <tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <td></td>
            <td align="left"><input type="submit" name="signin" value="Je m'inscrit"></td>
            <?php
            if(isset($_POST['signin']))
            {
                header('Location: signin.php');
            }
            ?>
          </tr>


        </table>

       </form>
<br>
       <?php
if(isset($erreur))
{

    echo '<font color="red">'.$erreur.'</font>';
}
?>



</div>


     </body>
</html>