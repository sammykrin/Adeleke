<?php session_start(); 
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>New hostel</title>
	<meta charset="utf-8">
    <title>About</title>
    <link rel="icon" href="./testing/AU.jpg" type="image/png">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <link href="bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
	<script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<style>
	@font-face
		{
			font-family: 'bellefair-Regular';
			src:url('google-font/bellefair-Regular.ttf');
			src:url('google-font/bellefair-Regular.ttf') format('ttf');
			src:url('google-font/bellefair-Regular.ttf') format('truetype');
		}
		
		
		#main 
		{
		    transition: margin-left .5s;margin-left: 240px;
		}
         #drop{
            margin-top: 1pc;
        }		
	</style>

</head>
<body>
		<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h1 style="font-size: 30px;font-weight: bold;">New-Hostel<span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu"></span></h1>
                </div>
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

                    <li>
                        <a href="http://localhost/adeleke/Adminlogin/come.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-globe " aria-hidden="true"></i> Student-info</a>
                    </li>

                    <li>
                        <a href="http://localhost/adeleke/Adminlogin/404.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-info-circle " aria-hidden="true"></i> Error 404</a>
                    </li>

                </ul>
            </div>
        </div>

        <div id="page-wrapper">
                    <form class="form" action="addhostelreg.php" method="post" enctype="multipart/form-data">
                        <div class="container-fluid">
                            <div class="row">
                               <div class="col-md-6" id="drop">
                                <div class="white-box analytics-info"><h1 align="center" style="font-size: 40px;font-weight: bold;">Personal-Info</h1>
                                
                            <input type="text" name="Full_Name" required="true" placeholder="Name..." class="form-control">
                           <input type="text" name="DOB" required="true" placeholder="Date of birth..." class="form-control">
                          <input type="text" name="Matric_No" required="true" placeholder="Matric_No..." class="form-control">
                           <input type="text" name="Course" required="true" placeholder="Course..." class="form-control">
                            <input type="text" name="Level" required="true" placeholder="Level..." class="form-control">
                           <input type="text" name="Religion/Denomination" required="true" placeholder="Religion~Denomination..." class="form-control">
                                
                            </div>
                               </div>


                               <div class="col-md-6" id="drop">
                                <div class="white-box analytics-info"><h1 align="center" style="font-size: 40px;font-weight: bold;">Contact Details</h1>
                           <input type="text" name="Student_Phone_No" placeholder="Student~Phone~No..."   required="true"  class="form-control">
                           <input type="email" name="Email_Address" placeholder="Email~Address..."  required="true" class="form-control">
                            <input type="text" name="Home_Address"  placeholder="Home~Addres..." required="true" class="form-control">
                            <input type="text" name="Parent_Phone_No" placeholder="Parent~Phone~No..."  required="true" class="form-control"> 
                               </div>
                           </div>
                                
                            </div>    
                        </div>

                                
                                     <div class="row">
                                        <div class="col-md-12">
                                        <div class="white-box"><h1 align="center" style="font-size: 40px;font-weight: bold;">Hostel Details</h1>
           <label>Choose-Hostel</label>
        <select oninput="this.className = ''" name="hostel" required="true">
            <option value="Male Hostel">Male</option>
            <option value="Female Hostel">Female</option>
        </select>
         <input type="file" name="passport" placeholder="Passport..." required="true" oninput="this.className = ''" class="form-control">
         <label>ROOM-NO</label>
        <select oninput="this.className = ''" name="roomnos" required="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

           <label>ROOM-TAG</label>
         <select oninput="this.className = ''" name="room" required="true">
                                            <option value="A~BLOCK">A~BLOCK</option>
                                            <option value="B~BLOCK">B~BLOCK</option>
                                            <option value="C~BLOCK">C~BLOCK</option>
                                            <option value="D~BLOCK">D~BLOCK</option>
                                            <option value="E~BLOCK">E~BLOCK</option>
                                            <option value="F~BLOCK">F~BLOCK</option>
                                            <option value="G~BLOCK">G~BLOCK</option>
                                            <option value="H~BLOCK">H~BLOCK</option>
                                            <option value="I~BLOCK">I~BLOCK</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


          <label>Bulk</label>
    <select oninput="this.className = ''" name="bulk" required="true">
                                            <option value="Bulk-1">Bulk-1</option>
                                            <option value="Bulk-2">Bulk-2</option>
                                            <option value="Bulk-3">Bulk-3</option>
                                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            
            <label>Bed-Type</label>
     <select oninput="this.className = ''" name="bed" required="true">
                                            <option value="Upper-Bed 1">Upper-Bed 1</option>
                                            <option value="Lower-Bed 1">Lower-Bed 1</option>
                                            <option value="Upper-Bed 2">Upper-Bed 2</option>
                                            <option value="Lower-Bed 2">Lower-Bed 2</option>
                                            <option value="Upper-Bed 3">Upper-Bed 3</option>
                                            <option value="Lower-Bed 3">Lower-Bed 3</option>
                                        </select>


       <br>
        <button class="btn btn-md btn-success" value="submit" type="submit">Submit</button>
        <!-- <input type="submit" name="" value="Submit" align="center"> -->
                           
             </div>
                 </div>
                    </div>
                        </form>
                    </div>

       
       
</body>
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