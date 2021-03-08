<?php
require 'dbcon.php';
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$matric = $_POST['Matric'];
$password = sha1($_POST['Password']);	
$Confrimpassword = sha1($_POST['Confrimpassword']);
$result=mysqli_query($con,"insert into student_reg_db(firstname,surname,email,matric_no,password,confirm_password)values('$fname','$sname','$email','$matric','$password','$Confrimpassword')");
echo mysqli_error($con);
if ($result) {
print("Reg complete"." ".$name); 
header("location:index.php");	
}
?>	