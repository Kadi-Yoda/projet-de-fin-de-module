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
        <a class="dropdown-toggle" data-toggle="dropdown" href="client.php">Espace client
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#inscription" data-toggle="modal" class="lien"><span class="glyphicon glyphicon-user" ></span>Inscription</a></li>
          <li><a href="#connexion" data-toggle="modal" class="lien"><span class="glyphicon glyphicon-user"></span>Connexion</a></li>
          
        </ul>
        <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="admin.php">Notre equipe</a><span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li><a href="#connex" data-toggle="modal" class="lien"><span class="glyphicon glyphicon-user"></span>Connexion</a></li>
    </ul>
    
  </div>
  </nav>
<!-- Modal inscription -->
  <div class="modal fade" id="inscription">
    <div class="modal-dialog modal-md">
      <div class="modal-content border-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title couleur-form titre-form">Inscription</h4>
          <div class="taille-form-titre"></div>
        </div>
        <div class="modal-body">
         <form id="contact-form" method="post" action="traitement/inscrire.php" role="form">
                        <div class="row">
                            
                                
                                
                            <div class="col-md-6">
                                <label for="name" class="couleur-form">Nom <span class="blue">*</span></label>
                                <input id="name" type="text" name="nom" class="form-control" placeholder="Votre Nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                   
                            <label for="firstname" class="couleur-form">Prénom <span class="blue">*</span></label>
                            <input id="lastname" type="text" name="prenom" class="form-control" placeholder="Votre prénom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                                <p class="comments"></p>
                            </div>
                             <div class="col-md-6">
                                <label for="password1" class="couleur-form">mot de passe<span class="blue">*</span></label>
                                <input id="password1" type="password" name="password" class="form-control" placeholder="Votre mot de passe">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="couleur-form">Téléphone<span class="blue">*</span></label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
                            </div>
                            


                           
                            

                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            
                        </div>
                   
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-user"> S'incrire</span></button>
          <button type="submit" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Fermer</span></button>
        </div>
         </form>
      </div>
    </div>
  </div>
</div>


 <!-- Modal connexion -->
  <div class="modal fade" id="connexion">
    <div class="modal-dialog modal-sm">
      <div class="modal-content border-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title couleur-form titre-form" >Connexion</h4>
           <div class="taille-form-titre2"></div>
        </div>
        <div class="modal-body">
          <form id="contact-form" method="post" action="traitement/connexion.php" role="form">
                        <div class="row">
                            
                            
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder=" Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="passe" class="couleur-form">Mot de passe <span class="blue">*</span></label>
                                <input id="passe" type="password" name="password" class="form-control" placeholder="Mot de passe ">
                                <p class="comments"></p>
                            </div>
                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            
                        </div>
                    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-log-in"> Se connecter</span></button>
          <button type="submit" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Fermer</span></button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal connexion -->
  <div class="modal fade" id="connex">
    <div class="modal-dialog modal-sm">
      <div class="modal-content border-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title couleur-form titre-form" >Connexion</h4>
           <div class="taille-form-titre2"></div>
        </div>
        <div class="modal-body">
          <form id="contact-form" method="post" action="traitement/connex.php" role="form">
                        <div class="row">
                            
                            
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder=" Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="passe" class="couleur-form">Mot de passe <span class="blue">*</span></label>
                                <input id="passe" type="password" name="password" class="form-control" placeholder="Mot de passe ">
                                <p class="comments"></p>
                            </div>
                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            
                        </div>
                    
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-log-in"> Se connecter</span></button>
          <button type="submit" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Fermer</span></button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

