<?php 

require 'database.php';
if(isset($_POST)){
	$nom=$_POST['name'];
	$prenom=$_POST['firstname'];
	$email=$_POST['email'];
	$numero=$_POST['number'];
	$poste=$_POST['poste'];
	$dispo=$_POST['dispo'];
}


$db=Database::connect();
 $insert=$db->prepare("INSERT INTO `equipe`(`nom`, `prenom`, `Email`, `numeroEquipe`, `poste`,`disponiblite`) VALUES(?,?,?,?,?,?)");
 $insert->execute(array($nom,$prenom,$email,$numero,$poste, $dispo));


 header("location:../admin.php")




 ?>