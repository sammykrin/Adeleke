<?php session_start();
require 'dbcon.php';
if(isset($_SESSION['user'])){
$show=mysqli_query($con,"select * from student_info_db");
// while($stu=mysqli_fetch_array($show)){
// 	$id = $stu['student_info'];
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Students-Info</title>
	<link rel="icon" href="./testing/AU.jpg" type="image/png">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
 
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

	
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
	<script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<style>
	
		#main .buy {display: flex;justify-content: space-around;}

		#main 
		{
			transition: margin-left .5s;margin-left: 250px;
			padding-top: 20px
		}
		/*img
		{
			width: 5%;
			margin-right:230px;
			padding-top: 8px;
			position: static;
		}*/
		
 
	</style>
</head>
<body onload="get('')">
<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header fixed-top">
                <ul class="nav navbar-top-links navbar-right pull-right">
                	<!-- <li><img src="img/AU.jpg"></li> -->

                    <li>
                        <form>
                            <div role="search" class="app-search hidden-sm hidden-xs m-r-11 mb-3"><input type="text" placeholder="Search..." id="inputs" onkeyup="get(this.value)"  name="input" class="form-control"><a href=""><i class="fa fa-search"></i></a></div> </form>
                    </li>
                    
                </ul>
            </div>
        </nav>



	<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <!-- <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu"><b>INFO</b></span></h3>
                </div> -->
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="http://localhost/adeleke/Adminlogin/dashboard.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="http://localhost/class/php/custolist.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                    </li>
                   
                    <li>
                        <a href="http://localhost/adeleke/Adminlogin/About.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-font" aria-hidden="true"></i> About</a>
                    </li>

                  <!--   <li>
                        <a href="http://localhost/adeleke/Adminlogin/come.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-globe " aria-hidden="true"></i> Student-info</a>
                    </li>
 -->
                     <li>
                        <a href="http://localhost/adeleke/Adminlogin/addhostel.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-address-book " aria-hidden="true"></i> New-Hostel</a>
                    </li>


                    <li>
                        <a href="http://localhost/adeleke/Adminlogin/404.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-info-circle " aria-hidden="true"></i> Error 404</a>
                    </li>

                </ul>
                
            </div>
            
        </div>




<!-- <div id="page-wrapper"> -->
	<div class="col-md-12 mt-5">
		<div id="main">
					<table class='table table-bordered table-striped mt-2'>
						<thead>
						
							<th>Name</th>
							<th>Course</th>
							<th>Matric-No</th>
							<th>Level</th>
							<th>Email-Address</th>
							<!-- <th>Gender</th> -->
							<th>More-Details</th>
					
					</thead>
							<tbody>
								
							</tbody>
					</table>
				
				</div>
			



</div>
<!-- </div> -->
<!-- <footer class="footer text-center" style="background-color:#EBEFF3"> 2018 &copy; Powered and brought to you by samuel olamilehin </footer> -->

<script>
		function get(f)
		{
			var put='';
			var ins=f;
          $.post("json.php",{input:ins},function(take){all=JSON.parse(take);
            for(i=0;i<all.length;i++){
            	ids=all[i].student_info;
            	put+="<tr><td>"+all[i].Name+"</td><td>"+all[i].Course+"</td><td>"+all[i].Matric_No+"</td><td>"+all[i].Level+"</td><td>"+all[i].Email_Address+"</td><td><button style ='margin-left:26%' class='btn btn-sm btn-info'><a style='text-decoration:none;color:white;' href='more.php?id="+ids+"'>More</button></td></tr>";
            }
            $('tbody').html(put);
          });
          
		}
		// function papi(u)
		// {
		// 	var inc=r;
		// 	$.post("json.php",{input:inc},function(take){all=JSON.parse(take);
		// 		for(i=0;<all.length;i++){
		// 			idss=all[i].student_info;
		// 	put+="<tr><td>"+all[i].Name+"</td><td>"+all[i].Course+"</td><td>"+all[i].Matric_No+"</td><td>"+all[i].Level+"</td><td>"+all[i].Email_Address+"</td><td>"+all[i].gender+"</td><td><button class='btn btn-sm btn-info'><a style='text-decoration:none;color:white;' href='more.php?id="+idss+"'>More</button></td></tr>";
		// 	 $('tbody').html(put);
		// 	}	
  //         });
		// }
	</script>
</body>
<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
	
</html>
<?php
}
else{
    $msg='Login here first';
    include 'index.php';
}
?>