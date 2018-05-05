
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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Rentrez vos informations pour l'inscription</div>
      <div class="card-body">
        <!--   METHODE ET ACTION-->
        <form method="POST" action="">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Prénom</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="prenom" placeholder="Entez votre prénom">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Nom</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" name="nom" placeholder="Entez votre nom">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputNaissance">Date de naissance</label>
                <input class="form-control" id="exampleInputNaissance" name="date_naissance" type="text" aria-describedby="naissanceHelp" placeholder="Entez votre date de naissance">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLasttelephone">Téléphone</label>
                <input class="form-control" name="telephone" id="exampleInputtelephone" type="tel" aria-describedby="telephoneHelp" placeholder="Entez votre numéro de téléphone">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Entrer email">
          </div>
          <div class="form-group">
            <label for="exampleInputadresse">Adresse Postale</label>
            <input class="form-control" name="adresse" id="exampleInputadresse" type="text" aria-describedby="adresseHelp" placeholder="Entrer adresse postale">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputsex">Sex</label>
                <select name="sexe" id="sex">
                <option value="M">M</option>
                <option value="F">F</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputsituation">Situation</label>
                <select name="situation" id="situation">
                <option value="LICENCE">LICENCE</option>
                <option value="MASTER">MASTER</option>
                <option value="DOCTORA">DOCTORA</option>
                <option value="THESE">THESE</option>
                <option value="CHOMAGE">CHOMAGE</option>
                <option value="CDI">CDI</option>
                <option value="CDD">CDD</option>
                <option value="ENTREPRENEUR">ENTREPRENEUR</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputcampus">Campus</label>
                <select name="campus" id="campus">
                <option value="PARIS">PARIS</option>
                <option value="LYON">LYON</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputpromo">Promo</label>
                <select name="promo" id="promo">
                <option value="ING1">ING1</option>
                <option value="ING2">ING2</option>
                <option value="ING3">ING3</option>
                <option value="ING4">ING4</option>
                <option value="ING5">ING5</option>
                <option value="ALUMNI">ALUMNI</option>
                </select>
              </div>
            </div>
          </div>

           <div class="form-group">
            <!--
              <form method="competences" method="POST" action="">
              <p>
              Cochez vos compétences :<br />
              <input type="checkbox" name="competences" id="C" value="C" /> <label for="C">C</label>
              <input type="checkbox" name="competence" id="C++" value="C++" /> <label for="C++">C++</label><br />
              <input type="checkbox" name="competence" id="JAVA" value="JAVA" /> <label for="JAVA">JAVA</label>
              <input type="checkbox" name="competence" id="PYTHON" value="PYTHON" /> <label for="PYTHON">PYTHON</label><br />
              <input type="checkbox" name="competence" id="PACK OFFICE" value="PACK OFFICE" /> <label for="PACK OFFICE">PACK OFFICE</label>
              <input type="checkbox" name="competence" id="SQL" value="SQL" /> <label for="SQL">SQL</label>
              </p>
              </form> 
              <form method="intérêt" method="POST" action="">
              <p>
              Cochez vos intérêt :<br />
              <input type="checkbox" name="MUSIQUE" id="MUSIQUE" /> <label for="MUSIQUE">MUSIQUE</label>
              <input type="checkbox" name="SPORT" id="SPORT" /> <label for="SPORT">SPORT</label><br />
              <input type="checkbox" name="HUMANITAIRE" id="HUMANITAIRE" /> <label for="HUMANITAIRE">HUMANITAIRE</label>
              <input type="checkbox" name="CUISINE" id="CUISINE" /> <label for="CUISINE">CUISINE</label><br />
              <input type="checkbox" name="DIY" id="DIY" /> <label for="DIY">DIY</label>
              <input type="checkbox" name="VOYAGES" id="VOYAGES" /> <label for="VOYAGES">VOYAGES</label>
              </p>
              </form>
            -->

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input class="form-control" name="mdp" id="exampleInputPassword1" type="password" placeholder="Entrez mot de passe">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmer mot de passe</label>
                <input class="form-control" name="mdp2" id="exampleConfirmPassword" type="password" placeholder="Confirmez mot de passe">
              </div>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="ok" value="S'enregistrer" ></input><br>
           <div><a class="btn btn-primary btn-block" href="login.php"  >Retour</a></div>
        </form>
        <?php
        
          $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
          
       
if(isset($_POST['ok'])) {

$rqt="SELECT MAX(utilisateur_id) FROM utilisateur";
$last=$bdd->query($rqt);
$d=$last->fetch();
$ui=$d[0]+1;


            $email=isset($_POST["email"])? $_POST["email"]: "";
            $mdp=isset($_POST["mdp"])? $_POST["mdp"]: "";
            $mdp2=isset($_POST["mdp2"])? $_POST["mdp2"]: "";
            $nom=isset($_POST["nom"])? $_POST["nom"]: "";
            $prenom=isset($_POST["prenom"])? $_POST["prenom"]: "";
            $date_naissance=isset($_POST["date_naissance"])? $_POST["date_naissance"]: "";
            $telephone=isset($_POST["telephone"])? $_POST["telephone"]: "";
           $promo=isset($_POST["promo"])? $_POST["promo"]: "";
           $campus=isset($_POST["campus"])? $_POST["campus"]: "";
            $adresse=isset($_POST["adresse"])? $_POST["adresse"]: "";
            $situation=isset($_POST["situation"])? $_POST["situation"]: "";
            $sexe=isset($_POST["sexe"])? $_POST["sexe"]: "";




$req = $bdd->prepare('INSERT INTO utilisateur(utilisateur_id,nom, prenom, date_naissance, sexe, telephone, promo, campus, adresse, situation, email, mdp) VALUES  ( :utilisateur_id, :nom, :prenom, :date_naissance, :sexe, :telephone, :promo, :campus,  :adresse, :situation, :email, :mdp)');



$req->execute(array(
  
  'utilisateur_id'=>$ui,
  'nom' => $nom,
  'prenom' => $prenom,
  'date_naissance' => $date_naissance,
  'sexe' => $sexe,
  'telephone' => $telephone,
  'promo' => $promo,
  'campus' => $campus,
  'adresse' => $adresse,
  'situation' => $situation,
  'email' => $email,
  'mdp' => $mdp
  ));


if(!empty($ui)&&!empty($nom)&&!empty($prenom)&&!empty($date_naissance)&&!empty($sexe)&&!empty($telephone)&&!empty($promo)&&!empty($campus)&&!empty($adresse)&&!empty($situation)&&!empty($email)&&!empty($mdp)&&!empty($mdp2))
{

      if($mdp!=$mdp2)
      {
        echo "<br>Vos mots de passes ne correspondent pas ! Veuillez réessayer.";
      }
      else
      {
        
         echo "Vous êtes bien enregistrer, cliquez sur retour afin de vous connecter";
      }

}
else
{
  echo "<br>Vous devez remplir tous les champs !  Veuillez réessayer.";
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
