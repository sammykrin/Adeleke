<?php
require 'dbcon.php';
$name = $_POST['name'];
$email = $_POST['email'];
$matric = $_POST['Matric'];
$password = sha1($_POST['Password']);	
$Confrimpassword = sha1($_POST['Confrimpassword']);
$result=mysqli_query($con,"insert into student_reg_db(name,email,matric_no,password,confrim_password)values('$name','$email','$matric','$password','$Confrimpassword')");
echo mysqli_error($con);
if ($result) {
print("Reg complete"." ".$name); 
header("location:index.php");	
}
?>	