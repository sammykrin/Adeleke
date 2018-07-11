<?php
require 'dbcon.php';
/*$show=mysqli_query($con,"select * from student_info_db");
while($stu=mysqli_fetch_array($show)){
	$id = $stu['student_info'];
}*/
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>More</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
</head>
<body>

<?php
$more=mysqli_query($con,"select * from student_info_db where student_info = $id");

echo "<div class='container-fluid'><div class='row'><div class='col-md-9'><table class='table table-bordered table-striped mt-2' style='width:80%'>";

while($stud=mysqli_fetch_array($more)){
echo "<tr><th>Name</th><td>".$stud['Name']."</td></tr><tr><th>Course</th><td>".$stud['Course']."</td></tr><tr><th>Matric-No</th><td>".$stud['Matric_No']."</td></tr><tr><th>level</th><td>".$stud['Level']."</td></tr><tr><th>D.O.B</th><td>".$stud['D_O_B']."</td></tr><tr><th>Religion/Denomintaion</th><td>".$stud['Religion_Denomination']."</td></tr><tr><th>Home-Address</th><td>".$stud['Home_Address']."</td></tr><tr><th>Email-Address</th><td>".$stud['Email_Address']."</td></tr><tr><th>Student-Phone_No</th><td>".$stud['Student_Phone_No']."</td></tr><tr><th>Parent-Phone_No</th><td>".$stud['Parent_Phone_No']."</td></tr><tr><th>Rooms</th><td>".$stud['Room']."</td></tr><tr><th>gender</th><td>".$stud['gender']."</td></tr><td><button class='btn btn-success btn-sm'><a style='text-decoration:none;color:white;' href='edit.php?id=$id'>Edit</button></a></td><td><button class='btn btn-danger btn-sm'><a style='text-decoration:none;color:white;' href='delete.php?id=$id'>Delete</button></a></td></tr>";
echo "</table></div><div class='col-md-3 mt-2'><img src=../passport/".$stud['passport']." width='300' height='300'/></div></div></div>";

}
?>  
<button class="btn btn-sm btn-warning offset-1"><a style='text-decoration:none;color:white;' href='come.php?id=$id'>Back</button></a></button>
</body>
<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>