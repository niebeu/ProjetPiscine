<?php
/*
$database="projetpiscine";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);

*/
$bdd = new PDO('mysql:host=localhost;dbname=projetpiscine','root','');
$erreur="";
            //Recupération des données rentrée 
            $mdp=isset($_POST["mdp"])? $_POST["mdp"]: "";
            $mdp2=isset($_POST["mdp2"])? $_POST["mdp2"]: "";
            $nom=isset($_POST["nom"])? $_POST["nom"]: "";
            $prenom=isset($_POST["prenom"])? $_POST["prenom"]: "";
            $date=isset($_POST["date"])? $_POST["date"]: "";
            $tel=isset($_POST["tel"])? $_POST["tel"]: "";
            $adressepostale=isset($_POST["adressepostale"])? $_POST["adressepostale"]: "";
            $photofond=isset($_POST["photofond"])? $_POST["photofond"]: "";
            $formation=isset($_POST["formation"])? $_POST["formation"]: "";
            $situation=isset($_POST["situation"])? $_POST["situation"]: "";
            $photoProfil=isset($_POST["photoProfil"])? $_POST["photoProfil"]: "";
            $adresse=isset($_POST["adresse"])? $_POST["adresse"]: "";
            $age=isset($_POST["age"])? $_POST["age"]: "";

if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date']) AND !empty($_POST['tel']) AND !empty($_POST['adressepostale']) AND !empty($_POST['formation']) AND !empty($_POST['situation']) AND !empty($_POST['photoProfil']) AND !empty($_POST['photofond']) AND !empty($_POST['adresse']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) )
{
            if($mdp==$mdp2)
                {
                     $sql= $bdd->prepare("INSERT INTO utilisateur(adresse, mdp, nom, prenom, age, formation, situatio, photoProfil, tel, adressepostale, photofond) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                    $sql->execute(array($adresse ,$mdp,$nom,$prenom , $age, $formation, $situation, $photoProfil, $tel, $adressepostale, $photofond));
                    $erreur ="Votre profil a bien ete enregistre !";
                    header('Location: login.php');
                    
                }
            else
            {
                    $erreur = "Vos mots de passes ne correspondent pas !";
            }

}
else
{
    $erreur ="Tous les champs doivent être rempli !";
}




?>

<html>
    <head>
        <title>Signin</title>
       <meta charset="utf-8" />

     </head>
     <body>
      <div align="center">
       <h1>Inscription</h1>
       <form action="" method="post">
        
        <table>

            <tr>
            <td align="right">Nom :</td>
            <td> <input type="text" placeholder="Votre nom" name="nom"><tr> </tr><tr></tr><tr></tr><tr></tr></td>
          </tr><tr></tr>


          <tr>
            <td align="right">Prenom :</td>
            <td> <input type="text" placeholder="Votre prenom" name="prenom"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>


          <tr>
            <td align="right">Date de naissance :</td>
            <td> <input type="Date" placeholder="Votre date de naissance" name="date"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>



          <tr>
            <td align="right">Telephone :</td>
            <td> <input type="number" placeholder="Votre numero" name="tel"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>


          <tr>
            <td align="right">Adresse Postale :</td>
            <td> <input type="text" placeholder="Votre adresse postale" name="adressepostale"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>

          

          <tr>
            <td align="right">Formation :</td>
            <td> <input type="text" placeholder="Votre formation" name="formation"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>


          <tr>
            <td align="right">Situation :</td>
            <td> <input type="text" placeholder="Votre situation" name="situation"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>


          <tr>
            <td align="right">Photo de profil :</td>
            <td> <input type="text" placeholder="URL de la photo" name="photoProfil"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>


          <tr>
            <td align="right">Photo de couverture :</td>
            <td> <input type="text" placeholder="URL de la photo " name="photofond"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>

          <tr>
            <td align="right">Mail :</td>
            <td> <input type="email"  placeholder="Votre mail" name="adresse"></td><br><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>

          <tr>
            <td align="right">Mot de passe :</td>
            <td> <input type="password" placeholder="Votre mot de passe"  name="mdp"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>

                 <tr>
            <td align="right">Comfirmation du mot de passe :</td>
            <td> <input type="password" placeholder="Comfirmer votre mot de passe"  name="mdp2"></td><tr> </tr><tr></tr><tr></tr><tr></tr>
          </tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
          <tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <td></td>
            <td align="center"><input type="submit" name="formulaire" value="Envoyer"></td>
          </tr>

<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
          <tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <td></td>
            <td align="center"><input type="submit" name="login" value="J'ai deja un compte"></td>
          </tr>
          <?php
            if(isset($_POST['login']))
            {
                header('Location: login.php');
            }
            ?>

        </table>

       </form>
<?php
if(isset($erreur))
{
    echo '<font color="red">'.$erreur.'</font>';
}
?>

</div>



     </body>
</html>