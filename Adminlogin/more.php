<?php
require 'dbcon.php';
$studentId = $_GET['id'];
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
$more=mysqli_query($con,"select * from student_info_db where student_info = '$studentId'");

echo "<div class='container-fluid'><div class='row'><div class='col-md-8'><table class='table table-bordered table-striped mt-2' style='width:60%'>";

while($stud=mysqli_fetch_array($more)){
echo "<tr><th>Name</th><td>".$stud['Name']."</td></tr><tr><th>Course</th><td>".$stud['Course']."</td></tr><tr><th>Matric-No</th><td>".$stud['Matric_No']."</td></tr><tr><th>level</th><td>".$stud['Level']."</td></tr><tr><th>D.O.B</th><td>".$stud['D_O_B']."</td></tr><tr><th>Religion/Denomintaion</th><td>".$stud['Religion_Denomination']."</td></tr><tr><th>Home-Address</th><td>".$stud['Home_Address']."</td></tr><tr><th>Email-Address</th><td>".$stud['Email_Address']."</td></tr><tr><th>Student-Phone_No</th><td>".$stud['Student_Phone_No']."</td></tr><tr><th>Parent-Phone_No</th><td>".$stud['Parent_Phone_No']."</td></tr><tr><th>gender</th><td>".$stud['gender']."</td></tr><tr><th>Hostel</th><td>".$stud['Choose_Hostel']."</td></tr><tr><th>Room-Tag</th><td>".$stud['Room_Tags']."</td></tr><tr><th>Room-No</th><td>".$stud['Room_NO']."</td></tr><tr><th>Bunk</th><td>".$stud['Bunk_Type']."</td></tr><tr><th>Bed-Type</th><td>".$stud['Bed_Type']."</td></tr><td><button class='btn btn-success btn-sm'><a style='text-decoration:none;color:white;' href='edit.php?id=$studentId'>Edit</button></a></td><td><button class='btn btn-danger btn-sm'><a style='text-decoration:none;color:white;' href='delete.php?id=$studentId'>Delete</button></a></td></tr>";
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