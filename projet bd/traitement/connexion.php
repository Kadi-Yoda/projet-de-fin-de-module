<?php 
require 'database.php';
if (isset($_POST)) {
	$email =$_POST['email'];
	$password=$_POST['password'];
	
}
$db=Database::connect();
$verify=$db->prepare("SELECT * FROM user WHERE email=? AND mdp=?");
$verify->execute(array($email,$password));

if ($sol=$verify->fetch()) {
	session_start();
	$_SESSION['id']=$sol['id'];
	
header("location:../client.php");
}else{
header("location:../index.php");
}















 ?>