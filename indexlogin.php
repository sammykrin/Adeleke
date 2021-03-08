<?php session_start();
require 'dbcon.php';
$matricno = $_POST['Matricno'];
$password = sha1($_POST['Password']);
$result=mysqli_query($con,"select * from student_reg_db where matric_no= '$matricno' and password = '$password'");
$tell=true;
	while ($row=mysqli_fetch_array($result)) 
	{
		$email = $row['email'];
		$fullname = $row['firstname']." ".$row['surname'];
		// echo "Welcome"." ".$row['name']." "."You are now logged in";
		// echo header("location:form.php");
		$tell=false;
	}
	if ($tell)
	{
		$msg="Incorrect Matric-no or Password!";
		include 'index.php';
		// echo "Incorrect";
	}
	else{
			$_SESSION['matricno'] = $matricno;
			$_SESSION['email'] = $email;
			$_SESSION['fullname'] = $fullname;
		
		$verify = mysqli_query($con,"select status from student_info_db where matric_no = '$matricno'");
		$verify1 = mysqli_fetch_array($verify);
		$status = $verify1['status']; 
		if($status == 'accepted') header("location:finished.php");
		else header("location:form.php");	
	}
?>