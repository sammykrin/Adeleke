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

		body{
			margin: 0;
			padding: 0;
			background-color: #fafafa;
		}
		#container{
			display: flex;
			height: 100vh;
			justify-content: center;
			align-items: center;
		}
		#area{
			width: 30%;
			height: 80vh;
			background-color: #fff;
			box-shadow: 0 0 10px #ccc;
			border-radius: 10px;
			display: flex;
			justify-content: center;
			flex-direction: column;
		}
		
		#img-div,#form-div{
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: row;
			justify-content: center;
		}
		#img-div{
			background-color: #0078D7;
			height: 60%;
			border-bottom: 1px solid grey;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
		}
		#form-div{
			padding-top: 70px;
		}
		form{
                 width:90%; 
		}
		img{
			width: 110px;
			height: 100px;
			border-radius: 50%; 
			position: relative;
			top: 58%;
			/*align-self: center;*/
			/*border: 3px solid #8d0b0b;*/
		}
		input{
			width: 100%;
			margin-bottom: 25px;
			padding-top: 6px;
			padding-bottom: 6px;
			border-radius: 20px;
			border: 2px solid #ccc;*/

		}
		button{
			margin-left: 39%;
			padding: 12px 30px;
			background-color: #0078D7;
			color: #000;
			border: 1px solid #fff;
			transition: background-color 1s;
			border-radius: 19px;
		}
		button:hover{
			background-color: #fff;
			border:3px solid #0078D7;
			color: #777;
			cursor: pointer;

		}
		@media only screen and (max-width: 400px){
			img{
				width: 80px;
				height: 80px;
				padding-top: 20px;
							}
			button{
				width: 95px;
				height: 50px;
				padding-left:18px ;
				margin-left: 0px;
			}
			area{
				height: 100%;
				width: 100%;
			}

		}
		
	</style>
</head>
<body>

<div id="container">
		<div id="area">
		<div id="img-div">
         <img src="img/AU.jpg" alt="image">
     </div>
     <div id="form-div">
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
						<input type="text" class="form-control" required="true" name="Matricno" id="mat">
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
 						
						<div><!-- <input type="submit" name="" value="Login" style="width: 100%;background-color: #6D7E92"> --><button class="btn btn-sm" value="submit" name="">login</button></div>
						<div style="font-size: 12px;color: #000000"><b>Note</b>: Your default password is your username in lowercase</div>
						<div><a href="reg.php" style="text-decoration: none;margin-left: 35%;font-size: 20px;margin-bottom: 20px">SignUp</a></div>
         </form>
     </div>
			
		</div>
	</div>


	
	
</body>
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>
</html>