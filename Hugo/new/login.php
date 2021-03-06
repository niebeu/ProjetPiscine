<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');

if(isset($_POST['formulaire'])) {
   $email = isset($_POST['email'])? $_POST["email"]: "";
   $mdp = isset($_POST['mdp'])? $_POST["mdp"]: "";
   if(!empty($email) AND !empty($mdp)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mdp = ?");
      $requser->execute(array($email, $mdp));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['utilisateur_id'] = $userinfo['utilisateur_id'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: signin.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvaise email ou mauvais mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}


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
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" placeholder="Entrer email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input class="form-control" id="exampleInputPassword1" type="password" nam="mdp" placeholder="Entrer mot de passe">
          </div>
        <div>
          <a class="btn btn-primary btn-block" href="login.php" name="formulaire">Sign In</a></div> <br>
            <div><a class="btn btn-primary btn-block" href="signin.php">S'enregistrer</a></div>
        </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
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
