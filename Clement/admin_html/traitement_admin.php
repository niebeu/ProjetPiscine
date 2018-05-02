<!DOCTYPE html>
<html>
<head>
<title>A BASIC HTML FORM</title>
</head>

<?php
 		$nom = isset($_POST["nom"])?$_POST["nom"] : ""; 
 		$prenom = isset($_POST["prenom"])?$_POST["prenom"] : "";
 		$choix = isset($_POST["choix"])?$_POST["choix"] : "";

 		// BLINDAGE POUR VOIR SI TOUTES LES VALEURS SONT BIEN RENTRÉES
 		if($nom == "") 
 			{ 
				echo "Le nom est vide <br />";
 			}

 		if($prenom == "") 
 			{ 
				echo "Le numéro d'identification est vide <br/>";
 			}


 		if($choix == "") 
 			{ 
 				echo "Le métier est vide <br/>";
 			}



 		// COUPLE IDENTIFIANT/ID STOCKÉS EN MÉMOIRE
 		$logs = array("Basile" => "2702","Elie" => "1510","Rafaelle" => "0804"); 

		foreach($logs as $name => $code)
		{
			if($name == $nom && $code == $iD)
			{
				echo "CET EMPLOYÉ EXISTE DÉJÀ ! <br/><br/>";
				break;
			}
		}
	
?>

</html>

