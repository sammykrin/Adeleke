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
// $gender = $_POST['radio'];
$hostels = $_POST['hostel'];
$tag = $_POST['room'];
$room = $_POST['roomnos'];
$bulk = $_POST['bulk'];
$beds = $_POST['bed'];																				
$all = false;
$az=false;
$dates = date("d/m/y");
$settime = date("h:m:sa");
$status = 'pending';
$pass = move_uploaded_file($_FILES['passport']['tmp_name'],"passport/".$passport);
$result=mysqli_query($con,"insert into student_info_db(Name,Course,Matric_No,Level,D_O_B,Religion_Denomination,Home_Address,Email_Address,Student_Phone_No,Parent_Phone_No,passport,Choose_Hostel,Room_Tags,Room_NO,Bulk_Type,Bed_Type,dates,time,status)values('$name','$course','$matricno','$level','$dob','$religion','$home','$email','$student','$parent','$passport','$hostels','$tag','$room','$bulk','$beds','$dates','$settime','$status')");
if ($result) {
	$hostel = mysqli_query($con,"INSERT into hostel set hostel_name = '$hostels'");
	$insertRoom = mysqli_query($con,"INSERT into room set hostel_name = '$hostels',room_name = '$tag'");
    $bulks = mysqli_query($con,"INSERT into bunk set bunk_name = '$bulk',room_name = '$tag'");
    $all=true;
}	
if($all){
	 $bed=mysqli_query($con,"INSERT into bed set bunk_name ='$bulk',bed_type = '$beds'");
	 $a=mysqli_query($con,"SELECT * from student_info_db where Email_Address = '$email'");
	 while ($b=mysqli_fetch_array($a)) {
	 	$id = $b['student_info'];
	 }
	 $h=mysqli_query($con,"select * from bed where bed_type = '$beds'");
	 while ($m=mysqli_fetch_array($h)) {
	 	$beeds_id=$m['bed_id'];
	 	echo $beeds_id;
	 }
	 $story = mysqli_query($con,"INSERT into bed_history set student_info = '$id',entry_date = '$dates',bed_id = '$beeds_id'");
	if($story) {$az=true;}
}
if ($az) {
print("Reg complete"." ".$name."".""."Your room no is".$room.""); 	
}
else{echo mysqli_error($con);}

 ?>