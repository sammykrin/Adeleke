<?php session_start(); 
if(isset($_SESSION['user'])){
require 'dbcon.php';
$empty = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./testing/AU.jpg" type="image/png">
    <title>Notification</title>
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
    <script type="text/javascript" src="wowjs/dist/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
</head>
<style>
    #bellNo{
        font-weight: bold;
        font-size: 200px;
        color: #C9C9C9;
    }

        #main .buy {display: flex;justify-content: space-around;}

        #main 
        {
            transition: margin-left .5s;margin-left: 250px;
            padding-top: 20px
        }
</style>

<body>
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
                        <a href="dashboard.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="http://localhost/class/php/custolist.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                    </li>
                   
                    <li>
                        <a href="About.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-font" aria-hidden="true"></i> About</a>
                    </li>

                    <li>
                        <a href="come.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-globe " aria-hidden="true"></i> Student-info</a>
                    </li>

                      <li>
                        <a href="http://localhost/adeleke/Adminlogin/addhostel.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-address-book " aria-hidden="true"></i> New-Hostel</a>
                    </li>

                    <li>
                        <a href="404.php" class="waves-effect" style="text-decoration: none;"><i class="fa fa-info-circle " aria-hidden="true"></i> Error 404</a>
                    </li>

                </ul>
                
            </div>
            
        </div>
        <?php
         if(true){
        ?>
        <div class="col-md-12 mt-5">
        <div id="main">
                    <table class='table table-bordered table-striped mt-2'>
                        <thead>
                        
                            <th>Name</th>
                            <!-- <th>Gender</th> -->
                            <th>Course</th>
                            <th>Matric-No</th>
                            <th>Action</th>
                    </thead>
                            <tbody>
    <?php 
            $query = mysqli_query($con,"SELECT * from student_info_db where status = 'pending'");
            while($data=mysqli_fetch_array($query)){
                if(!empty($data)){
                $empty = false;
                echo "<tr><td>".$data['Name']."</td>";
                // echo "<td>".$data['gender']."</td>";
                echo "<td>".$data['Course']."</td>";
                echo "<td>".$data['Matric_No']."</td>";
                echo "<td><button class='btn btn-sm btn-success'><a href=accept.php?id=".$data['student_info'].">Accept</a></button></td>";
                echo "</tr>";
                }
            }
     ?>
                            </tbody>
                    </table>
                
                </div>
        </div>
        <?php
        }
        if($empty){
        ?>
        <section id="wrapper" class="error-page">
        <div class="error-box">
            <center>
                <div class="error-body text-center">
                <!-- <h1 class="text-danger">404</h1> -->
                <h3 class="text-uppercase"><i class="fa fa-bell-slash" id="bellNo"></i></h3>
                <h5 class="text-muted m-t-30 m-b-30">No New Notification!!</h5>
                <h4 class="text-muted m-t-30 m-b-30">We will Alert you when you have any new Notification</h4>
                <a href="dashboard.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40" style="text-decoration: none;">Back to home</a>
            </div>
            </center>
        </div>
    </section>
<?php }?>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap4/js/popper.js"></script>
</body>
</html>
<?php
}
else{
    $msg='Login here first';
    include 'index.php';
}
?>