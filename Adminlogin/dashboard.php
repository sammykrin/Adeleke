<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png"> -->
    <title>Welcome</title>
    <!-- Bootstrap Core CSS -->
	<meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <link href="bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
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
		
		nav div ul li a:hover{
			color: #F9A026;
			transition:2s
		}
		img{
			width: 5%;
			margin-right:230px;
			padding-top: 10px;
		}
		nav{
			position:static-top;
		}
	</style>


	   


<body>
<nav class="navbar navbar-default m-b-0">
            <div class="navbar-header">
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                	<li><img src="img/AU.jpg"></li>
                	<li class="nav-item"><a href="#!mails" class="nav-link"><span class="fa fa-envelope" id="me"></span></a></li>
                	<li class="nav-item"><a href="#!notification" class="nav-link nav-brand"><span class="fa fa-bell" id="me"></span></a></li>
                    <li class="nav-item"><a href="http://localhost/adeleke/Adminlogin/index.php" class="nav-link"><span class="fa fa-sign-out-alt" id="me"> Logout</span></a></li>
                       
                    
                </ul>
            </div>
        </nav>



	<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h1 style="font-size: 30px;font-weight: bold;">WELCOME<span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu"></span></h1>
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

				<div class="container-fluid">
				<div class="row big-title">
					<div class="col-lg-4 col-sm-6 col-xs-12 mt-3">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12 mt-3">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12 mt-3">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
					


						
						</div>

						<div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Students Yearly Report</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-info"></i>2017</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-inverse"></i>2013</h5> </li>
                            </ul>
                            <div id="ct-visits" style="height: 405px;"></div>
                        </div>
                    </div>
                </div>
						
					</div>
				 </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Olamilehin Admin brought to you by wrappixel.com </footer>
        </div>
				
	</div>
</body>

<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>