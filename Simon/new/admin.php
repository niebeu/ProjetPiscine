<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Administrateur veuillez choisir :</div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="nom" placeholder="Entrer le nom">
          </div>
          <div class="form-group">
            <label for="exampleInputPrenom">Prénom</label>
            <input class="form-control" id="exampleInputPrenom" type="text" name="prenom" placeholder="Entrer le prénom">
          </div><br>
          <label for="exampleInputchoix">Choix</label>
            <select id="choix" name="choix">
                <option value="Ajouter">Ajouter</option>
                <option value="Supprimer">Supprimer</option>
                
            </select><br><br>
        <div>
          <button class="btn btn-primary btn-block" type="submit" name="submit" value="Envoyer">Envoyer</button></div> <br>
            <div><a class="btn btn-primary btn-block" href="login.php">Retour</a></div>
            
        </form>
         <?php
        




          $nom = isset($_POST['nom'])? $_POST["nom"]: "";
    $prenom = isset($_POST['prenom'])? $_POST["prenom"]: "";
         $choix= isset($_POST['choix'])? $_POST["choix"]: "";
if($choix=='Supprimer'){
    
          $reponse= $bdd->prepare('DELETE FROM utilisateur WHERE nom=? AND prenom=? ');
          $reponse->execute(array($nom,$prenom));
}
if($choix=='Ajouter'){  
    
    header("Location: register.php");
exit;
}
      
          
  ?>
          
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
