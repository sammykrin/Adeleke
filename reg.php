<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<title>Reg</title>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-6 mt-3 offset-3">
				<div class="card">
					<div class="card-header">
						<p align="center">Please Kindly Fill in the form below</p>
						</div>
						<div class="card-body">
							<form class=" form" action="reglogin.php" method="post">
					<div class="row">
						<div class="col-md-12">
							<h4 class="text-center font-weight-bold" style="background-color: #696768;color: #fff">FRIST PROCESS</h4>
						</div>
						
						<div class="col-md-12">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Name</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="fa fa-user"></span>											
										</span>
										<input type="text" name="name" class="form-control" required="true" name="name">
									</div>
								</div>
								
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Email</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="fa fa-envelope"></span>											
										</span>
										<input type="email" name="email" class="form-control" required="true" name="email">
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Matric No</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="fa fa-edit"></span>											
										</span>
										<input type="text" class="form-control" required="true" name="Matric">
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
										<input type="Password" name="Password" class="form-control" required="true" name="Password">
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Confrim Password</label>
									<div class="input-group">
										<span class="input-group-addon">
											<span class="fa fa-key"></span>											
										</span>
										<input type="Password"  class="form-control" required="true" name="Confrimpassword">
									</div>
								</div>
							</div>
							
							<div class="form-group offset-5">
								<!-- <a href="Adminlogin/index.php"> --><input type="submit" name="" class="btn btn-sm btn-success"></a>
							</div>
						</div>
						
					</div>
					
				</form>
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