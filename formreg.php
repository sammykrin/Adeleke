<?php
require 'dbcon.php';
$name = $_POST['Full_Name'];
$course = $_POST['Course'];
$matricno = $_POST['Matric_No'];
$level = $_POST['Level'];
$dob = $_POST['DOB'];
$religion = $_POST['Religion/Denomination'];
$home = $_POST['Home_Address'];
$email = $_POST['Email_Address'];
$student = $_POST['Student_Phone_No'];
$parent = $_POST['Parent_Phone_No'];
$passport = $_FILES['passport']['name'];
$gender = $_POST['radio'];
// echo  $_FILES['passport']['tmp_name'];
$pass = move_uploaded_file($_FILES['passport']['tmp_name'],"passport/".$passport);
$result=mysqli_query($con,"insert into student_info_db(Name,Course,Matric_No,Level,D_O_B,Religion_Denomination,Home_Address,Email_Address,Student_Phone_No,Parent_Phone_No,passport,gender)values('$name','$course','$matricno','$level','$dob','$religion','$home','$email','$student','$parent','$passport','$gender')");
// if ($gender=='male'){
// 	$result=mysqli_query($con,"insert into male_db(Name,Course,Matric_No,Level,D_O_B,Religion_Denomination,Home_Address,Email_Address,Student_Phone_No,Parent_Phone_No,passport,gender)values('$name','$course','$matricno','$level','$dob','$religion','$home','$email','$student','$parent','$passport','$gender')");}

// 	else if ($gender=='female'){
// 	$result=mysqli_query($con,"insert into female_db(Name,Course,Matric_No,Level,D_O_B,Religion_Denomination,Home_Address,Email_Address,Student_Phone_No,Parent_Phone_No,passport,gender)values('$name','$course','$matricno','$level','$dob','$religion','$home','$email','$student','$parent','$passport','$gender')");}

echo mysqli_error($con);
// echo $gender;
if ($result) {
print("Reg complete"." ".$name.""."Your room no is"); 	
}

?>