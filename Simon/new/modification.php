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
    <form method="POST" action="">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Rentrez vos informations pour compléter l'inscription</div>
      <div class="card-body">

              <div class="form-group">
            <label for="exampleInputp1">Photo de Profil</label>
            <input class="form-control" id="exampleInputp1" name="photo_profil" type="text" aria-describedby="p1Help" placeholder="Ajouter photo de profil">
          </div>
          <div class="form-group">
            <label for="exampleInputp2">Photo de couverture</label>
            <input class="form-control" name="photo_couverture" id="exampleInputp2" type="text" aria-describedby="p2Help" placeholder="Ajouter photo de couverture">
             
  </div>

          </div>


         
          <form method="post" action=""> <button class="btn btn-primary btn-block"  name="su1" type="submit" value="Enregistrer">Enregistrer</button></form>
                    <!--<a class="btn btn-primary btn-block" name="su" type="submit" value="suivre" ">Suivre</a> --> 
                    <br><div><a class="btn btn-primary btn-block" href="mypage.php"  >Retour</a></div>
      

      </div>
    </div>
  </div></form>
 <?php  

$photop=isset($_POST["photo_profil"])? $_POST["photo_profil"]: "";
$uti=$_SESSION["utilisateur_id"];

                    if(isset($_POST['su1'])) {
                    
                  

                      $reponse = $bdd->prepare('UPDATE utilisateur SET (photo_profil = :pp) WHERE (utilisateur_id = :ui) ');
                      $reponse->execute(array(
                        'pp' => $photop,
                        'ui' => $uti
                        //$photop,$uti
                      ));

                     echo $photop."   ".$uti;

                   }

                   
?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>