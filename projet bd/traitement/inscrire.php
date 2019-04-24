<?php 

require 'database.php';
if(isset($_POST)){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$telephone=$_POST['phone'];
}


$db=Database::connect();
 $insert=$db->prepare("INSERT INTO `user`(`name`, `lastname`, `email`, `mdp`, `telephone`) VALUES(?,?,?,?,?)");
 $insert->execute(array($nom,$prenom,$email,$password,$telephone));


 header("location:../index.php")




 ?>