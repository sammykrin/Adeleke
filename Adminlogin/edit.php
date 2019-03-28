<?php
require 'dbcon.php';
if(isset($_POST['sub'])){
	$id= $_POST['id'];
$name = $_POST['Full_Name'];
$course = $_POST['Course'];
$matircno = $_POST['Matric_No'];
$dob = $_POST['DOB'];
$religion = $_POST['Religion/Denomination'];
$home = $_POST['Home_Address'];
$email = $_POST['Email_Address'];
$student = $_POST['Student_Phone_No'];
$parent = $_POST['Parent_Phone_No'];
$room = $_POST['Room_NO'];


$update = mysqli_query($con, "UPDATE student_info_db SET Name='$name',Course = '$course',Matric_No= '$matircno',D_O_B = '$dob',Religion_Denomination='$religion',Home_Address='$home',Email_Address='$email',Student_Phone_No='$student',Parent_Phone_No='$parent',Room_NO='$room' WHERE student_info = '$id'");
if($update){
	include("come.php");
	}else{
	echo mysqli_error($con);
	}
}else
{
$id = $_GET['id'];
$select = mysqli_query($con, "select * from student_info_db where student_info ='$id'");
if($select){
while($row=mysqli_fetch_array($select)){
 ?>
 
		<html>
		<head><tittle>Edit</tittle></head>
		<body>
		<form action="edit.php" method="post">
			<input type="text" name="id" value= <?php echo $row['student_info']; ?> hidden="hidden">
			<label>Name:</label>
							<input type="text" name="Full_Name" required="true" value= <?php echo $row['Name'];  ?> ><br>

							<label>Course:</label>
							<input type="text" name="Course" required="true" value= <?php echo $row['Course'];  ?>><br>

							<label>Matric_No:</label>
							<input type="text" name="Matric_No" required="true" value= <?php echo $row['Matric_No'];  ?> ><br>

							<label>D.O.B:</label>
							<input type="text" name="DOB" required="true" value= <?php echo $row['D_O_B'];  ?> ><br>

							<label>Religion/Denomination:</label>
							<input type="text" name="Religion/Denomination" required="true" value= <?php echo $row['Religion_Denomination'];  ?> ><br>

							<label>Home_Addres:</label>
							<input type="text" name="Home_Address" required="true" value= <?php echo $row['Home_Address'];  ?> ><br>

			 				<label>Email_Address:</label>
							<input type="email" name="Email_Address" required="true" value= <?php echo $row['Email_Address'];  ?> ><br>

							<label>Student_Phone_No:</label>
							<input type="text" name="Student_Phone_No" required="true" value= <?php echo $row['Student_Phone_No'];  ?> ><br>

							<label>Parent_Phone_No:</label>
							<input type="text" name="Parent_Phone_No"  required="true" value= <?php echo $row['Parent_Phone_No'];  ?> ><br>

							<label>Room-no:</label>
							<input type="text" name="Room_NO"  required="true" value= <?php echo $row['Room_NO'];  ?> ><br>
									
							<button class="btn btn-sm" name="sub" type="submit">Update</button>

			
		</form>
		</body>
		</html>
		<?php
	}
}
}
?>