
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="LuFQgahHap3A96XtE6aGUpLrQhJd0LglV2Vzp1kF">
	<title>Adeleke University</title>
	<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}
		/**{font-family: 'bellefair', serif;}*/
		@font-face
		{
			font-family: 'bellefair-Regular';
			src:url('google-font/bellefair-Regular.ttf');
			src:url('google-font/bellefair-Regular.ttf') format('ttf');
			src:url('google-font/bellefair-Regular.ttf') format('truetype');
		}

		body{
			margin: 0;
			padding: 0;
			background-color: #fafafa;
		}
	</style>

	<link rel="icon" href="./testing/AU.jpg" type="image/png">
    <link rel="stylesheet" href="./testing/vendor.css">
    <link rel="stylesheet" href="./testing/app.css">
    <link href="./testing/sweetalert.css" rel="stylesheet">
</head>
<body class="gray-bg  pace-done" data-ng-app="flicksApps" data-ng-controller="flicksAuthController"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
	<div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <img alt="image" class="" src="./testing/AU.jpg" style="width:100px;">
        
                <h2 class="font-bold">Welcome to Adeleke University, Ede</h2>

             </div>
    
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="form" action="indexlogin.php" method="post">

                    	<font color="red"><?php
                               if (isset($msg)) {
                               	echo $msg;
                               }
							?></font>

                        <input type="hidden" name="_token" value="LuFQgahHap3A96XtE6aGUpLrQhJd0LglV2Vzp1kF">

                        <div data-ng-class="frmlogin.user_name.$invalid &amp;&amp; frmlogin.user_name.$touched ? &#39;form-group has-error&#39; : &#39;form-group&#39;">
                            <input type="text" class="form-control" value="" placeholder="Matric-No" data-ng-model="login.user_name" data-ng-required="true" autofocus="" name="Matricno" id="mat" required="">
<!--                             <span class="help-block" data-ng-show="frmlogin.user_name.$invalid &amp;&amp; frmlogin.user_name.$touched">Username is required</span> -->
                            <!--<span class="help-block" data-ng-show="frmlogin.user_name.$error.user_name">Valid user_name is required</span>-->
                                                    </div><br>
                        
                        <div data-ng-class="frmlogin.password.$invalid &amp;&amp; frmlogin.password.$touched ? &#39;form-group has-error&#39; : &#39;form-group&#39;">
                            <input type="Password" name="Password" class="form-control" placeholder="Password"  required="">
                            <span class="help-block"></span>
                            
                                                    </div>
                        <button type="submit" class="btn btn-warning block full-width m-b">Login</button>

                        <a href="https://myportal.kwasu.edu.ng/password/reset">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="reg.php">Create an account (For Student's Only)</a>
                    </form>
                    <p class="m-t">
                        <small>See You At The Top</small>
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                Copyright Samuel Olamide
            </div>
            <div class="col-md-6 text-right">
                <small>© 2018-2019</small>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>