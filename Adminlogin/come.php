<?php 
require 'dbcon.php';
$show=mysqli_query($con,"select * from student_info_db");?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
	<script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<style>
	.bg{
			background-image: url('img/come.jpg');
			width: auto;
			height: 100vh;
			background-size: cover;
			background-repeat: no-repeat;
			color: #fff;	 
			background-attachment:fixed;
			font-family: Bellefair-Regular;
			font-size: 25px; 
		}
	.sidenav 
		{
		    height: 1000px;
		    width: 240px;
		    position:fixed;
		    z-index: 1;
		    /*top: 39px;*/
		    left: 0;
		    background-color:#343A40 ;
		    overflow-x: hidden; 
		    transition: 0.5s;
		    padding-top: 60px;

        }

		.sidenav a 
		{
		    padding: 8px 8px 8px 32px;
		    font-size: 25px;
		     color: #fff;
		    display: block;
		    transition: 0.3s;
        }

		.sidenav a:hover 
		{
		   background-color: #FC5042;
				    color: white;
				    transition: 2s;
		}

		.sidenav .closebtn 
		{
		    position: absolute;
		    top: 0;
		    right: 25px;
		    font-size: 36px;
		    margin-left: 50px;
		}
		#main .buy {display: flex;justify-content: space-around;}

		#main 
		{
		    transition: margin-left .5s;margin-left: 250px;
		    padding-top: 20px
		}
		
		nav a{color: white;padding-left: 10px;padding: 5px}

		@media screen and (max-height: 450px) 
		{
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}

		.dropdown
		{
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content 
		{
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    min-width: 230px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a 
		{
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown:hover .dropdown-content 
		{
    		display: block;
		}


	</style>
</head>
<body>
	<nav class="bg-dark">
		<ul class="nav">
			<li><img src="img/AU.jpg" style="width: 5%;margin-left:10%;margin-top: 1%"><span style="color: white;"> Adeleke Uni</span></li>
			<!-- <li class="nav-item"><a href="#!contact" class="nav-link">Contact Us</a></li> -->
			<div  style='margin-left: 39%'><li class="nav-item"><a href="#!mails" class="nav-link"><span class="fa fa-envelope" ></span></a></li></div>
			<li class="nav-item"><a href="#!notification" class="nav-link nav-brand"><span class="fa fa-bell"></span></a></li>
			<li class="nav-item"><a href="http://localhost/adeleke/Adminlogin/index.php" class="nav-link"><span class="fa fa-user"></span></a></li>
			
		</ul>
	</nav>
	
	 <div id="mySidenav" class="sidenav">
			  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-bars"></i></a -->
			 <a href="http://localhost/adeleke/Adminlogin/dashboard.php" style="text-decoration:none;">Dashboard</a>
			 <a href="http://localhost/class/php/custolist.php" style="text-decoration:none;">Add Hostel</a>
			  <div class="dropdown">
  			<a href="#!" style="text-decoration: none;"><span id="fa" class="fa fa-edit"></span><span  id="sama"></span> Edit Student</a>
						  <div class="dropdown-content">
						    <a href="http://localhost/class/php/custolist.php" style="text-decoration: none;">Male </a>
						    <a href="http://localhost/class/php/custolist.php" style="text-decoration: none;">Female </a>
						  </div>
						</div>
			 <a href="http://localhost/adeleke/Adminlogin/come.php" style="text-decoration:none;"><span class="fa fa-users"> Students_Info</span></a>
			 
			</div>
<div id="main" class="wow slideInRight">

<?php
echo "<table border=2;'>";
echo "<tr><th>Name</th><th>Course</th><th>Matric-No</th><th>D.O.B</th><th>Religion/Denomintaion</th><th>Home-Address</th><th>Email-Address</th><th>Student-Phone_No</th><th>Parent-Phone_No</th><th>Rooms</th><th>Edit</th><th>Delete</th></tr>";
while ($shows=mysqli_fetch_array($show)) {
	$id=$shows['student_info'];
	echo "<tr><td>".$shows['Name']."</td><td>".$shows['Course']."</td><td>".$shows['Matric_No']."</td><th>".$shows['D_O_B']."</td><td>".$shows['Religion_Denomination']."</td><th>".$shows['Home_Address']."</td><td>".$shows['Email_Address']."</td><td>".$shows['Student_Phone_No']."</td><td>".$shows['Parent_Phone_No']."</td><td>".$shows['Room']."</td><td><button class='btn btn-success btn-sm'><a style='text-decoration:none;color:white;' href='edit.php?id=$id'>Edit</button></a></td><td><button class='btn btn-danger btn-sm'><a style='text-decoration:none;color:white;' href='delete.php?id=$id'>Delete</button></a></td></tr>";
}
echo "</table>";
?>
</div>
<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</body>
</html>
<?php
// echo "$id";
 ?>