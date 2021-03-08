<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="./testing/AU.jpg" type="image/png">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
 -->	<title>Admin login</title>
 <style>
 			#bg{
			background-image: url("img/login3.jpg");
			width: auto;
			height: 120vh;
			background-size: cover;
			background-repeat: no-repeat;
			color: #fff;	 
			background-attachment:fixed;
			font-family: Bellefair-Regular;
			font-size: 25px; 
		}
		#card{
			opacity: 10;
			filter: alpha(opacity=710);
			background-color: transparent;
		}
 </style>
</head>
<body>
	<div class="container">
		<div id="bg">
		<div class="row">
			<div class="col-md-12">
				<center>
				<fieldset style="width: 60%" id="card">
					<legend>Admin Portal</legend>
							<form class="form" action="indexlogin.php" method="post">
								<font color="red"><?php
                               if (isset($msg)) {
                               	echo $msg;
                               }
							?></font>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Mail</label>
									<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-envelope"></span>											
								</span>
						<input type="text" class="form-control" required="true" name="mail" placeholder="Mail">
					</div>
				</div>
			</div>

			<div class="col-md-12">
								<div class="form-group">
									<label for="name">Password</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="fa fa-lock"></span>											
										</span>
										<input type="Password" name="Password" class="form-control" required="true" placeholder="Password">
									</div>
								</div>
							</div>
 						<br>
						<div><input type="submit" name="" value="Login" style="background-color:#6AC62E"></div>
						<div style="font-size: 12px;"><b>Note</b>:This page is only meant for the Admins</div>
						<div><input type="checkbox" name="">Remember me</div>
						
						</form>
						</fieldset>
					</center>
			</div>
			
		</div>
		</div>
	</div>

</body>
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>