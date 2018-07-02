<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
	<script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<title>Welcome</title>
	<style>
	@font-face
		{
			font-family: 'bellefair-Regular';
			src:url('google-font/bellefair-Regular.ttf');
			src:url('google-font/bellefair-Regular.ttf') format('ttf');
			src:url('google-font/bellefair-Regular.ttf') format('truetype');
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

		/*.dropbtn
		{
		    background-color: #4CAF50;
		    color: white;
		    padding: 16px;
		    font-size: 16px;
		    border: none;
		    cursor: pointer;

		}
*/
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
*/				
	</style>


	   


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
			  <a href="javascript:void(0)" class="closebtn" onclick="bar()"><i id="bars" class="fa fa-bars"></i></a>	
			 <a id="same" href="http://localhost/adeleke/Adminlogin/dashboard.php"><span class="fa fa-dashboard">Dashboard</span></a>
			 <a href="http://localhost/class/php/custolist.php"><span id="fa" class="fa fa-user-plus fa-sm"></span><span id="samee"> Add_hotsel</span></a>
			 <div class="dropdown">
  			<a href="#!"><span id="fa" class="fa fa-edit fa-sm"></span><span  id="sama"></span>Edit_Student</a>
						  <div class="dropdown-content">
						    <a href="http://localhost/class/php/custolist.php">Male </a>
						    <a href="http://localhost/class/php/custolist.php">Female </a>
					 	  </div>
						</div>
			 <a href="http://localhost/adeleke/Adminlogin/come.php"><span id="fa" class="fa fa-users fa-sm"></span><span id="sameee" > Students_Info</span></a>
			 
			</div>
			<div id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-2">
						<div class="wow fadeInUpBig" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash1.jpg" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash2.jpg" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash3.jpg" class="img-fluid" width="180" style="margin-left: 6%">
							<img src="img/dash4.jpg" class="img-fluid" width="180" style="margin-left: 6%">
						</div>

						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12 mt-4">
							<div class="wow rollIn">
								<img src="img/dash.jpg" class="img-fluid" style="margin-left: 11%">
								<img src="img/dasssa.png" class="img-fluid" width="480">
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
				
			
</body>
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
		document.getElementById("fa").style.marginLeft="0px";
		document.getElementById("bars").style.paddingLeft="5px";
		document.getElementById("main").style.marginLeft="0px";
		 bars=false;
		}
		
	}
</script>
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>