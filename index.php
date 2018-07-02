<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<title>Welcome</title>
	<style>
	/**{font-family: 'bellefair', serif;}*/
		@font-face
		{
			font-family: 'bellefair-Regular';
			src:url('google-font/bellefair-Regular.ttf');
			src:url('google-font/bellefair-Regular.ttf') format('ttf');
			src:url('google-font/bellefair-Regular.ttf') format('truetype');
		}
		#bg{
			background-image: url("img/skul1.jpg");
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
			opacity: 0.7;
			filter: alpha(opacity=710);
			background-color: transparent;
		}
	</style>
</head>
<body>


	<div class="container">
		<div id="bg">
		<div class="row">
			<div class="col-md-12 mt-3">
				<p style="color: #272822; font-size: 30px;" align="center">Login to your Account</p>
				<div align="center"><span class="fa fa-lock fa-4x" style="font-weight: bold;color: #272822"></span></div>
				
			</div>
			
		</div>
		<div clas="row" id="card">
			<div class="col-md-12 mt-3" align="center">
				<div class="card" style="width: 50%; margin-bottom: 30px;" >
					<div class="card-body">
						<form class="form" action="indexlogin.php" method="post">
							<font color="red"><?php
                               if (isset($msg)) {
                               	echo $msg;
                               }
							?></font>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name" style="color: #000000">Matric No</label>
									<div class="input-group">
								<span class="input-group-addon">
									<span class="fa fa-edit"></span>											
								</span>
						<input type="text" class="form-control" required="true" name="Matricno">
					</div>
				</div>
			</div>

			<div class="col-md-12">
								<div class="form-group">
									<label for="name" style="color: #000000">Password</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="fa fa-lock"></span>											
										</span>
										<input type="Password" name="Password" class="form-control" required="true">
									</div>
								</div>
							</div>
 						<br>
						<div><input type="submit" name="" value="Login" style="width: 100%;background-color: #6D7E92"></div>
						<div style="font-size: 12px;color: #000000"><b>Note</b>: Your default password is your username in lowercase</div>
						<div style="color: #000000"><input type="checkbox" name="" >Remember me</div>
						<div><a href="reg.php" style="text-decoration: none;">SignUp</a></div>
						
						</form>
						
					</div>
	
				</div>
				
				
			</div>
			
		</div>
		
	</div>
</div>
	
</body>
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>