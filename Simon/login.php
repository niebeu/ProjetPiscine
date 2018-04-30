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

         //Recupération des données rentrée 
			$login=isset($_POST["adresse"])? $_POST["adresse"]: "";
			$mdp=isset($_POST["mdp"])? $_POST["mdp"]: "";

         $result = mysqli_query($db_handle,$sql);
         while($data = mysqli_fetch_assoc($result))
         {
         	
         	if( $login==$data['adresse']&& $mdp==$data['mdp'] )
                 { 
                 	echo $data['adresse'] . '<br>'."Existe dans la BDD ";
                 }
             else
             	{
             	
             		echo $login.'<br>';
            		echo"Inexistant dans la BDD";
         		}


         }
}
else {
         echo "Database not found";
}
//fermer la connection
mysqli_close($db_handle);






?>