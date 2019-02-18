<?php session_start(); 
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		.sidenav 
		{
		    height: 1000px;
		    width: 240px;
		    position:fixed;
		    z-index: 1;
		    top: 39px;
		    left: 0;
		    background-color:#343A40 ;
		    overflow-x: hidden; 
		    transition: 0.5s;
		    padding-top: 60px;

        }

		.sidenav a 
		{
		    padding: 8px 8px 8px 32px;
		    text-decoration: none;
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
		    right: 10px;
		    font-size: 36px;
		    margin-left: 50px;
		}
		#main .buy {display: flex;justify-content: space-around;}

		#main 
		{
		    transition: margin-left .5s;margin-left: 240px;
		}
		nav a{color: white;padding-left: 10px;padding: 5px}

		@media screen and (max-height: 450px) 
		{
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
		.sidenav .openbtn{
			position: relative;
			margin-right: 60;

		}

		nav{
			width: 100%;			
			height: 45px;
			background-color: #000;
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

		/*.dropdown:hover .dropbtn 
		{
    		background-color: #343A40;
		}
*/		#am{
			animation-name: konga;
			animation-duration:30s;
			animation-delay: 8s;
			background-image: url(img/1.png);
			height: 400px;
			background-repeat: no-repeat;
			animation-iteration-count: infinite;
			animation-direction: alternate-reverse;
		}
		@keyframes konga{
         25%{background-image: url(img/2.png);}
         50%{background-image: url(img/3.png);}
         75%{background-image: url(img/4.png);}
         100%{background-image: url(img/5.png);}
		}
	</style>

</body>
</html>

<?php
$rooms = array('A1','A2','A3','A4','A5','A6','A7','A8','A9','A10','A11','A12','A13','A14','A15','A16','A17','A18','A19','A20','A21','A22','B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','AB1','B12','B13','B14','B15','B16','B17','B18','B19','B20','B21','B22','C1','C2','AC3','C4','C5','C6','C7','C8','C9','C10','C11','C12','C13','C14','C15','C16','C17','C8','C19','C20','C21','C22','D1','D2','D3','D4','D5','D6','D7','D8','D9','D10','D11','D12','D13','D14','D15','D16','D17','D18','D19','D20','D21','D22','E1','E2','E3','E4','E5','E6','E7','E8','E9','E10','E11','E12','E13','E14','E15','E16','E17','E18','E19','E20','E21','E22','F1','F2','F3','F4','F5','F16','F7','F8','F9','F10','F11','F12','F13','F14','F15','F16','F17','F18','F19','F20','F21','F22','G1','G2','G3','G4','G5','G6','G7','G8','G9','G10','G11','G12','G13','G14','G15','G16','G17','G18','G19','G20','G21','G22','E1','H2','H3','H4','H5','H6','H7','H8','H9','H10','H11','H12','H13','H14','H15','H16','H17','H18','H19','H20','H21','H22','I1','I2','I3','I4','I5','I6','I7','I8','I9','I10','I11','I12','I13','I14','I15','I16','I17','I18','I19','I20','I21','I22');
echo $rooms[mt_rand(0,sizeof($rooms)-1)];

 ?>



 <nav class="bg-dark">
		<ul class="nav">
			<li><img src="img/AU.jpg" style="width: 5%;margin-left:10%;margin-top: 1%"><span style="color: white;"> Adeleke Uni</span></li>
			<!-- <li class="nav-item"><a href="#!contact" class="nav-link">Contact Us</a></li> -->
			<div  style='margin-left: 35%'><li class="nav-item"><a href="#!mails" class="nav-link"><span class="fa fa-envelope" ></span></a></li></div>
			<li class="nav-item"><a href="#!notification" class="nav-link nav-brand"><span class="fa fa-bell"></span></a></li>
			<li class="nav-item"><a href="http://localhost/adeleke/Adminlogin/index.php" class="nav-link"><span class="fa fa-user"></span></a></li>
			
		</ul>
	</nav>
 <div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="bar()"><i id="bars" class="fa fa-bars"></i></a>	
			 <a href="http://localhost/adeleke/Adminlogin/dashboard.php"><span class="fa fa-clock fa-sm"></span><span id="same"> Dashboard</span></a>
			 <a href="http://localhost/class/php/custolist.php"><span id="fa" class="fa fa-user-plus fa-sm"></span><span id="samee"> Add_hotsel</span></a>
			 <div class="dropdown">
  			<a href="#!"><span id="fa" class="fa fa-edit fa-sm"></span><span  id="sama"></span>Edit_Student</a>
						  <div class="dropdown-content">
						    <a href="http://localhost/Adeleke/Adminlogin/.php">Male </a>
						    <a href="http://localhost/adeleke/Adminlogin/.php">Female </a>
					 	  </div>
						</div>
			 <a href="http://localhost/adeleke/Adminlogin/come.php"><span id="fa" class="fa fa-users fa-sm"></span><span id="sameee" > Students_Info</span></a>
			 <a href="http://localhost/adeleke/Adminlogin/404.html"><span id="fa" class="fa fa-info-circle fa-sm"></span><span id="sameeee" > Error404</span></a>
			</div>




			<script>
	bars=false;
	function bar()
	{
	  if (bars==false) {
	  	document.getElementById("mySidenav").style.width="70px";
		document.getElementById("same").style.marginLeft="70px";
		document.getElementById("sama").style.marginLeft="70px";
		document.getElementById("samee").style.marginLeft="70px";
		document.getElementById("sameee").style.marginLeft="70px";
		document.getElementById("sameeee").style.marginLeft="70px";
		document.getElementById("fa").style.marginLeft="0px";
		document.getElementById("bars").style.paddingLeft="5px";
		document.getElementById("main").style.marginLeft="0px";
		bars=true;
	  }	
		
		else{
		document.getElementById("mySidenav").style.width="240px";
		document.getElementById("same").style.marginLeft="0px";
		document.getElementById("sama").style.marginLeft="0px";
		document.getElementById("samee").style.marginLeft="0px";
		document.getElementById("sameee").style.marginLeft="0px";
		document.getElementById("sameeee").style.marginLeft="0px";
		document.getElementById("fa").style.marginLeft="0px";
		document.getElementById("bars").style.paddingLeft="5px";
		document.getElementById("main").style.marginLeft="0px";
		 bars=false;
		}
		
	}
</script>

<!-- 	<div class="row">
						<div class="col-md-12 mt-4">
							<div class="wow rollIn">
								<img src="img/dash.jpg" class="img-fluid" style="margin-left: 11%">
								<img src="img/dasssa.png" class="img-fluid" width="480">
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div> -->

			<!-- <div class="wow fadeInUpBig" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash1.jpg" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash2.jpg" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash3.jpg" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash4.jpg" class="img-fluid" width="180" style="margin-left: 6%">
						</div> -->
<?php
}
else{
    $msg='Log in here first';
    include 'index.php';
}
?>