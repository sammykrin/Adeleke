<?php
require 'dbcon.php';
$matricno = $_POST['Matricno'];
$password = sha1($_POST['Password']);
$result=mysqli_query($con,"select * from student_reg_db where matric_no= '$matricno' and password = '$password'");
$tell=true;
	while ($row=mysqli_fetch_array($result)) 
	{
		// echo "Welcome"." ".$row['name']." "."You are now logged in";
		// echo header("location:form.php");
		$tell=false;
	}
	if ($tell)
	{
		$msg="Incorrect Matric no or Password!!!";
		include 'index.php';
		// echo "Incorrect";
	}
	else{
		 header("location:form.php");	
	}
?>