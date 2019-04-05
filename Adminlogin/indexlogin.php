<?php session_start();
require 'dbcon.php';
$mail = $_POST['mail'];
$password = sha1($_POST['Password']);
$result=mysqli_query($con,"select * from admin_db where mail= '$mail' and password = '$password'");
$tell=true;
while ($row=mysqli_fetch_array($result)) 
	{
		// echo "Welcome"." ".$row['name']." "."You are now logged in";
		$tell=false;
	}
	if ($tell)
	{
		$msg="Incorrect Mail or password!!!";
		include 'index.php';
		// echo "Incorrect user name or password";
	}
	else{
			$_SESSION['user']=$mail;
        header('location:dashboard.php');
	}
?>