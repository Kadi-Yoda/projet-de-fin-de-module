<?php 
session_start();
require 'traitement/database.php';
$db=Database::connect();
$user=$db->prepare("SELECT*FROM equipe WHERE id=?");
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
    <link rel="stylesheet" type="text/css" href="css/admin.css">


</head>
<body>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand titre">KY<span class="titre1">Construct</span></span>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Accueil</a></li>
      <li><a href="admin.php">Espace Equipe</a></li>
      
    </ul>

     <ul class="nav navbar-nav navbar-right" id="lien-inscription">
      <li><a href="traitement/deconnexion.php" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
    </ul>
    </div>
    </nav>
    <h1 class="text-logo" style="margin-top: 300px;"></span> Gestion des Membre de l'équipe<span></h1>

<a href="formulaire.php" class="btn btn-success">Ajouter</a>
    
    <section class="tables">
      
        <div class="container" id="table">
            <div class="row">
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>numero equipe</th>
                      <th>Poste</th>
                      <th>Disponibilité</th>
                      <th>Action</th>
                      
                      

                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     $view=$db->query("SELECT * FROM equipe");
                     while($affiche=$view->fetch()){

                     
                      ?>
                      <tr>
                        <td> <?php  echo $affiche['nom']; ?> </td>
                        <td> <?php  echo $affiche['prenom']; ?> </td>
                        <td> <?php  echo $affiche['numeroEquipe']; ?> </td>
                        <td> <?php  echo $affiche['poste']; ?> </td>
                        <td> <?php  echo $affiche['disponiblite']; ?> </td>
                        <td> 
                          <a href="modifier.php ? id=<?php echo $affiche['id'] ?>" class="btn btn-primary" id="btn"><span class="glyphicon glyphicon-pencil">Modifier</a>
                            <a href="traitement/supprimer.php ? id=<?php echo $affiche['id'] ?>"" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-remove">Supprimer</a>
                         </td>
                     </tr>
                    <?php  } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </section>

</body>
</html>















































<?php   include 'footer.php' ?>