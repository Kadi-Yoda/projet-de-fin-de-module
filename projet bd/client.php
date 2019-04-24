<?php 
session_start();
require 'traitement/database.php';
$db=Database::connect();
$user=$db->prepare("SELECT*FROM user WHERE id=?");
$user->execute(array($_SESSION['id']));

$affiche=$user->fetch();

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>accueuil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/client.css">


</head>
<body>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand titre">KY<span class="titre1">Construct</span></span>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Accueil</a></li>
      <li><a href="client.php">Espace Client</a></li>
      
    </ul>

     <ul class="nav navbar-nav navbar-right" id="lien-inscription">
      <li><a href="traitement/deconnexion.php" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
    </ul>
    </div>
    </nav>
    
    <section class="image">
    	<?php echo 'Bienvenue'. $affiche['name'] ?>
    	<h1 class="text-logo" style="margin-top: 300px;"></span> Mes Informations <span class="glyphicon glyphicon-wrench"></h1>
        <div class="container admin">
            <div class="row">
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>Mot de passe</th>
                      <th>Telephone</th>
                      <th>Type Maison</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                  	
                      <tr>
                            <td><?php echo $affiche['name'] ?></td>
                            <td><?php echo $affiche['lastname'] ?></td>
                            <td><?php echo $affiche['email'] ?></td>
                            <td><?php echo $affiche['mdp'] ?></td>
                            <td><?php echo $affiche['telephone'] ?></td>
                            <td><?php echo $affiche['maison'] ?></td>
                            <td><?php echo $affiche['devis'] ?></td>

                          
                             
                           
                     </tr>
                    
                  </tbody>
                 
                </table>
                <h1 class="text-logo" style="margin-top: 300px;"></span> Mes versements <span class="glyphicon glyphicon-wrench"></h1>
        <div class="container admin">
            <div class="row">
                <table class="table table-striped table-bordered">
                	<table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>Versement 1</th>
                      <th>Versement 2</th>
                      <th>Versement 3</th>
                      <th>Versement 4</th>
                      <th>Statut</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                            <td><?php  echo $affiche['versement_un']?></td>
                            <td><?php  echo $affiche['versement_deux']?></td>
                            <td><?php  echo $affiche['versement_trois']?></td>
                            <td><?php  echo $affiche['versement_quatre']?></td>
                            <td><?php  echo $affiche['statut']?></td>

                            

                          
                             
                           
                     </tr>
                    
                  </tbody>
                 
                </table>
            </div>
        </div>
    </section>

</body>
</html>