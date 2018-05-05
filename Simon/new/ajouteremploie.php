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
    <form method="POST" action="">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Rentrez le type de l'emploi que vous voulez proposer</div>
        
      <div class="card-body">
          
          
             <div class="form-group">
            <label for="exampleInputp1">Type de l'emploi :</label>
            <input class="form-control" id="exampleInputp1"  type="text" aria-describedby="tHelp" name="emploie" placeholder="Ajouter l'emploi">
          </div><br><br>


          <input class="btn btn-primary btn-block" href="mypage.php" name="ok1" type="submit" value="Enregistrer"></input>
          
          
          <input class="btn btn-primary btn-block" href="emploie.php" name="ok2" type="submit" value="Retour"></input>

      

      </div>
    </div>
  </div></form> <?php
        session_start();
 $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');

 
if(isset($_POST['ok1'])) {


  $rqt="SELECT MAX(id_emploie) FROM emploie";
$last=$bdd->query($rqt);
$d=$last->fetch();
$ui=$d[0]+1;
   $nom = isset($_POST['emploie'])? $_POST["emploie"]: "";

   



$req = $bdd->prepare('INSERT INTO emploie(id_emploie, nom) VALUES (:id_emploie, :nom)');



$req->execute(array(
  
  'id_emploie'=>$ui,
  'nom' => $nom,
  
  ));

 }
 if(isset($_POST['ok2'])) {
   header('Location: emploie.php');
 }

 ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>