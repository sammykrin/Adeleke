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
        color: #B92722;
    }

        #main .buy {display: flex;justify-content: space-around;}

        #main 
        {
            transition: margin-left .5s;margin-left: 250px;
            padding-top: 20px
        }
</style>

<body>
        <section id="wrapper" class="error-page">
        <div class="backward">
            <center>
                <div class="error-body text-center">
                <h3 class="text-uppercase"><i class="fa fa-ban" id="bellNo"></i></h3>
                <h1 class="text-muted m-t-30 m-b-30" style="font-weight: bold;">Oops!!</h1>
                <h4 class="text-muted m-t-30 m-b-30">Seems you are trying to login again after creating your profile, please see you hall adminstrator for more info</h4>
                <a href="index.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40" style="text-decoration: none;">Back to home</a>
            </div>
            </center>
        </div>
    </section>

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="bootstrap4/js/popper.js"></script>
</body>
</html>
