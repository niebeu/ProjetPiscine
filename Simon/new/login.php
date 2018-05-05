<?php
//session_start();
/*
  $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');


if(isset($_POST['formulaire'])) {
   $email = isset($_POST['email'])? $_POST["email"]: "";
   $mdp = isset($_POST['mdp'])? $_POST["mdp"]: "";
   if(!empty($email) AND !empty($mdp)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mdp = ?");
      $requser->execute(array($email, $mdp));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         //$_SESSION['utilisateur_id'] = $userinfo['utilisateur_id'];
         //$_SESSION['email'] = $userinfo['email'];
         header("Location: signin.php?id=".$_SESSION['id']);
      } else {
         echo "Mauvaise email ou mauvais mot de passe !";

      }
   } else {
      echo  "Tous les champs doivent être complétés !";
   }
}

*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
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
      <div class="card-header">Bienvenue sur LinkECE</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" placeholder="Entrer email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="mdp" placeholder="Entrer mot de passe">
          </div>
        <div>
          <input class="btn btn-primary btn-block" type="submit" href="login.php" name="ok1" value="envoyer"></input></div> <br>
            <div><a class="btn btn-primary btn-block" href="register.php"  >s'enregistrer</a></div>
        </form>
        <?php
        session_start();
 $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
  
if(isset($_POST['ok1'])) {
  
   $email = isset($_POST['email'])? $_POST["email"]: "";
   $mdp = isset($_POST['mdp'])? $_POST["mdp"]: "";
   
   $_SESSION["email"]= $email;

  $reponse = $bdd->query('SELECT * FROM utilisateur');

                  // On affiche chaque entrée une à une
                  while ($donnees = $reponse->fetch())
                  {

                          if(($donnees['email']==$email))
                          {
                            
                                      if($donnees['mdp']==$mdp)
                                          {
                                                            
                                                        if($donnees['type']=="ADMINISTRATEUR")
                                                        {
                                                           header('Location: admin.php');                                                        
                                                        }
                                                        else
                                                        {
                                                          $_SESSION["nom"]= $donnees['nom'];
                                                          $_SESSION["prenom"]= $donnees['prenom'];

                                                          $_SESSION["date_naissance"]= $donnees['date_naissance'];

                                                          $_SESSION["telephone"]= $donnees['telephone'];
                                                          $_SESSION["adresse"]= $donnees['adresse'];
                                                          $_SESSION["sexe"]= $donnees['sexe'];
                                                          $_SESSION["situation"]= $donnees['situation'];
                                                          $_SESSION["campus"]= $donnees['campus'];
                                                          $_SESSION["promo"]= $donnees['promo'];
                                                          $_SESSION["photo_profil"]= $donnees['photo_profil'];
                                                          $_SESSION["photo_couverture"]= $donnees['photo_couverture'];

                                                             header('Location: mypage.php');
                                                        }
                                        }
                                          else
                                          {
                                            echo "Email bon mais mauvais code";
                                          } 
                          }
                  }

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
