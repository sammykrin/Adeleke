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
		#text,textarea{
		display: block;
		margin-bottom: 30px;
		padding: 8px;
		width: 60%;
		border-radius:3px;
		border:solid 1px #0000ff;
		transition:width 2s;
	}
	}
	input:focus{
		width: 100%;
	}
	button{
		padding:8px 20px;
		background-color:#0000ff;
		color:#fff;
		border:solid 1px #fff;
	}
	button:hover{
		background-color: green;
		color:#000;
		cursor: pointer;
	}
	#gen{

	}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
					<div class="card">
						<div class="card-body">
							<form action="formreg.php" method="post" enctype="multipart/form-data">
							<label>Name:</label>
							<input type="text" name="Full_Name" placeholder="Your Full Name" required="true" id="text" >

							<label>Course:</label>
							<input type="text" name="Course" placeholder="Course" required="true" id="text">

							<label>Matric_No:</label>
							<input type="text" name="Matric_No" placeholder="Matric~No" required="true" id="text">

							<label>D.O.B:</label>
							<input type="text" name="DOB" placeholder="D.O.B" required="true" id="text">

							<label>Religion/Denomination:</label>
							<input type="text" name="Religion/Denomination" placeholder="Religion~Denomination" required="true" id="text">

							<label>Home_Addres:</label>
							<input type="text" name="Home_Address" placeholder="Home~Addres" required="true" id="text">

							<label>Email_Address:</label>
							<input type="email" name="Email_Address" placeholder="Email~Address" required="true" id="text">

							<label>Student_Phone_No:</label>
							<input type="text" name="Student_Phone_No" placeholder="Student~Phone~No" required="true" id="text">

							<label>Parent_Phone_No:</label>
							<input type="text" name="Parent_Phone_No" placeholder="Parent~Phone~No" required="true" id="text">

							<label>Passport</label>
							<input type="file" name="passport" required="true" id="text">
									<div>
										<label>Gender:</label>
							<input type="radio" name="radio" value="male">male
							<input type="radio" name="radio" value="female">female	
									</div>
									
							<button class="btn btn-sm" type="submit">Allocate</button>

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