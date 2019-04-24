<?php 
require 'database.php';

if (isset($_POST)){
  	$nom=$_POST['name'];
  	$prenom=$_POST['firstname'];
  	$email=$_POST['email'];
  	$numero=$_POST['number'];
  	$poste=$_POST['poste'];
  	$dispo=$_POST['dispo'];
  	$id=$_POST['id'];
  	}

$db=Database::connect();
$modif=$db->prepare("UPDATE equipe SET nom=?, prenom=?, Email=?,numeroEquipe=?, poste=?, disponiblite=? WHERE id=? ");
	
$modif->execute(array($nom, $prenom, $email, $numero, $poste, $dispo, $id));

header("location:../admin.php");
 ?>
