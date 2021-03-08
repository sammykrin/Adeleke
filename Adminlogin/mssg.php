<?php session_start(); 
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./testing/AU.jpg" type="image/png">
    <title>Inbox</title>
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
</head>
<style>
    .fa{
        font-weight: bold;
        font-size: 200px;
        color: #C9C9C9;
    }
</style>

<body>
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <center>
                <div class="error-body text-center">
                <h3 class="text-uppercase"><i class="fa fa-envelope"></i></h3>
                <h5 class="text-muted m-t-30 m-b-30">No Messages</h5>
                <h4 class="text-muted m-t-30 m-b-30">Your InBox Is Empty</h4>
                <a href="dashboard.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40" style="text-decoration: none;">Back to home</a>
            </div>
            </center>            
            
        </div>
    </section>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else{
    $msg='Login here first';
    include 'index.php';
}
?>