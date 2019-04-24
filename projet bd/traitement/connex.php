<?php 
require 'database.php';
if (isset($_POST)) {
	$email =$_POST['email'];
	$password=$_POST['password'];
	
}
$db=Database::connect();
$verify=$db->prepare("SELECT * FROM equipe WHERE Email=? AND code=?");
$verify->execute(array($email,$password));

if ($test=$verify->fetch()) {
	session_start();
	$_SESSION['id']=$test['id'];
	
header("location:../admin.php");
}else{
header("location:../index.php");
}
