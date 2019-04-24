<?php   
require 'traitement/database.php';
if(isset($_GET)){
  $id=$_GET['id'];
}
$db=Database::connect();
$mod=$db->prepare("SELECT * FROM equipe WHERE id=?");
$mod->execute(array($id));
$affiche=$mod->fetch();


 ?>


<!DOCTYPE html>
<html>
<head>
    <title>accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    

</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand titre">KY<span class="titre1">Construct</span></span>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Accueil</a></li>
        <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="admin.php">Notre equipe</a><span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li><a href="#connex" data-toggle="modal" class="lien"><span class="glyphicon glyphicon-user"></span>Connexion</a></li>
    </ul>
    
  </div>
  </nav>








<div class="container">
        <div class="heading">
            <h2>INSCRIVEZ-VOUS</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="contact-form" method="POST" action="traitement/modif.php">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname">Prenom<span class="blue">*</span></label>
                        <input type="text" id="firstname" name="firstname" required class="form-control" placeholder="Votre prénom" value="<?php echo $affiche['prenom'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="name">Nom<span class="blue">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $affiche['nom'] ?>">
                        
                    </div>
                    
                    <div class="col-md-6">
                        <label for="email">Email<span class="blue">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $affiche['Email'] ?>">
                        
                    </div>
                     <div class="col-md-6">
                        <label for="number">Numero equipe<span class="blue">*</span></label>
                        <input type="number" id="number" name="number" class="form-control" value="<?php echo $affiche['numeroEquipe'] ?>">
                        
                    </div>

                    <div class="col-md-6">
                        <label for="poste">Poste<span class="blue">*</span></label>
                        <input type="text" id="poste" name="poste" class="form-control" value="<?php echo $affiche['poste'] ?>" >
                        
                    </div>

                    <div class="col-md-6">
                        <label for="dispo">Disponibilite<span class="blue">*</span></label>
                        <input type="text" id="dispo" name="dispo" class="form-control" value="<?php echo $affiche['disponiblite'] ?>">
                         
                    </div>
                        <input type="" name="id" value="<?php echo $affiche['id'] ?>" hidden >

                    <div class="col-md-6">
                        <button type="submit" id="but" class="btn btn-success button-form"> Modifier</span></button>
                        
                    </div>

                </div> 
                
                </form>
            </div>
        </div>
    </div>
