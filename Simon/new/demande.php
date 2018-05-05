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
  <title>Accueil</title>
  <!-- Bootstrap et css-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

    
    
    
    
    
    
    
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    
    
    
  <!-- Navigation Menu-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="accueil.php">LinkECE</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="accueil.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Accueil</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="vous">
          <a class="nav-link" href="mypage.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Vous</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="réseau">
          <a class="nav-link" href="reseau.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Réseau</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="emploi">
          <a class="nav-link" href="emploie.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Emploi</span>
          </a>
        </li>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
         </ul>
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="photo.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Photos</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
    
    
    
    <!-- Page descendante-->  
    <div class="list-group list-group-flush small"></div>
    
    
  <div class="content-wrapper">
    <div class="container-fluid"> 
        
        
        
      <!-- Bouton Réseau-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="reseau.php">Réseau</a>
          <a href="demande.php">Demande</a>
        </li>
      </ol>
        
        
        
        
     <!-- Zone du fil d'actualité -->

     <?php 


                    $reponse = $bdd->query('SELECT * FROM utilisateur WHERE utilisateur.type != "ADMINISTRATEUR" AND utilisateur.suivre != "oui"');

                  // On affiche chaque entrée une à une
                  while ($donnees = $reponse->fetch())
                  {

                            ?>

        <div class="card card-register mx-auto mt-5">
            <div class="card-body">
               <div class="form-row">
                
      			
				   <div class="col-md-4">
				      
                      <?php  
                     echo' <img src="'.$donnees['photo_profil'].'" class="image" alt="philippe" width="110"/>';
                      ?>
                   </div>
                   
                       <div class="col-md-3" >
                       <br><br>
              <h6><?php echo $donnees['nom']." ".$donnees['prenom']; ?></h6>
                      
                   </div>
                      <div class="col-md-2">
                          <br><br>
              <h6><?php echo $donnees['situation']; ?></h6>
                      
                   </div>
                  
                   <div class="col-md-3">
                       <br><br>
                        <h6><?php echo $donnees['email']; ?></h6>

                         </div>
                      </div>
                
                <br>
                
                <div class="form-row">
    
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                  <form method="post" action=""> <button class="btn btn-primary btn-block"  name="su1" type="submit" value="Suivre">Suivre</button></form>
                    <!--<a class="btn btn-primary btn-block" name="su" type="submit" value="suivre" ">Suivre</a> --> 
                    <?php 

                    if(isset($_POST['su1'])) {
                    
                  

                      $reponse = $bdd->prepare('UPDATE utilisateur SET suivre = "oui" WHERE utilisateur_id = ? ');
                      $reponse->execute(array($donnees['utilisateur_id']));

                       // header('Location: emploie.php');
                     //echo "bienouej";

                   }

                      ?>
                    </div>
                    
                    
                </div>
                
                

               
                   
                   
            </div>
        
        
        
         </div>
          <?php
  
}

          ?>
     </div>
    
        
        
    
    <!-- Bas de page-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Halbeher - Lhuillier - Dubesset</small>
        </div>
      </div>
    </footer>
    
    
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    
    
    
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Ã�</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  
    
    
    
    
</body>

    
    
</html>