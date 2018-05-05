<?php
 $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
	echo "fekjne";
	$reponse = $bdd->query('SELECT * FROM utilisateur');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

     echo $donnees['nom']; 
    
}

$reponse->closeCursor(); 
?>