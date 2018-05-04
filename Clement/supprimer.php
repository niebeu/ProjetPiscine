 <?php
          
        $bdd = new PDO('mysql:host=localhost:8889;dbname=ProjetPi;charset=utf8', 'root', 'root');
          




          $nom = $_POST['name']; 
 		$prenom = $_POST["prenom"];
         $choix= $_POST["choix"];
if($choix=='Supprimer'){
    
          $reponse= $bdd->prepare('DELETE FROM utilisateur WHERE nom=? AND prenom=? ');
          $reponse->execute(array($nom,$prenom));
}
if($choix=='Ajouter'){  
    
    header("Location: login.html");
exit;
}
      
          
  ?>