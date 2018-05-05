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
         $sqlLogin="SELECT `nom` FROM `utilisateur` WHERE 1 ";

         //Recupération des données rentrée 
			$nom=isset($_POST["nom"])? $_POST["nom"]: "";
			$prenom=isset($_POST["prenom"])? $_POST["prenom"]: "";

         $result = mysqli_query($db_handle,$sql);
         while($data = mysqli_fetch_assoc($result))
         {
         	echo "Existe dans la BDD ";
         	if( $nom==$data['nom']&& $prenom==$data['prenom'] )
                 { 
                 	echo $data['nom'] . '<br>'."Existe dans la BDD ";
                 }
            

         }
}
else {
         echo "Database not found";
}
//fermer la connection
mysqli_close($db_handle);






?>