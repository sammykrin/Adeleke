<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap4/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<title>Welcome</title>
	<style>
	#regForm {
		background-color: #ffffff;
		margin: 100px auto;
		padding: 40px;
		width: 70%;
		min-width: 300px;
	}

	input {
	 	padding: 10px;
		width: 100%;
		font-size: 17px;
		font-family: Raleway;
		border: 1px solid #aaaaaa;
		border-radius:7px;
	}


	input.invalid {
  		background-color: #ffdddd;
	}

/* Hide all steps by default: */
	.tab {
  		display: none;
	}


	.step {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbbbbb;
		  border: none; 
		  border-radius: 50%;
		  display: inline-block;
		  opacity: 0.5;
	}


	.step.active {
  		opacity: 1;
	}

/* Mark the steps that are finished and valid: */
	.step.finish {
  		background-color: #4CAF50;
	}
	button:hover{
		background-color: green;
		color:#000;
		cursor: pointer;
	}
	</style>
	</head>
<body>
	<div class="container mt-3">
		<div class="jumbotron">
	<form action="formreg.php" method="post" enctype="multipart/form-data">
		<h1>FILL ALL FORMS:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
  <p><input type="text" name="Full_Name" required="true" placeholder="Name..." oninput="this.className = ''"></p>
  <p><input type="text" name="Course" required="true" placeholder="Course..." oninput="this.className = ''"></p>
  <p><input type="text" name="Matric_No" required="true" placeholder="Matric_No..." oninput="this.className = ''"></p>
 
</div>
	
<div class="tab">
	<p><input type="text" name="Level" required="true" placeholder="Level..." oninput="this.className = ''"></p>
  <p><input type="text" name="DOB" required="true" placeholder="DOB..." oninput="this.className = ''"></p>
  <p><input type="text" name="Religion/Denomination" required="true" placeholder="Religion~Denomination..." oninput="this.className = ''"></p>
</div>

<div class="tab">
  <p><input type="text" name="Home_Address"  placeholder="Home~Addres..." required="true" oninput="this.className = ''"></p>
  <p><input type="email" name="Email_Address" placeholder="Email~Address..."  required="true" oninput="this.className = ''"></p>
  <p><input type="text" name="Student_Phone_No" placeholder="Student~Phone~No..."   required="true"  oninput="this.className = ''"></p>
</div>

<div class="tab">
  <p><input type="text" name="Parent_Phone_No" placeholder="Parent~Phone~No..."  required="true" oninput="this.className = ''"></p>
  <p><input type="file" name="passport" placeholder="Passport..." required="true" oninput="this.className = ''"></p>
  <p><input type="radio" name="radio" value="male"
  oninput="this.className = ''">male</p>
   <p><input type="radio" name="radio" value="female"
  oninput="this.className = ''">female</p>


  <label>Choose-Hostel</label>
		<select oninput="this.className = ''" name="hostel" required="true">
			<option value="Samuel Hostel">Samuel</option>
			<option value="Biosla Hostel">Bisola</option>
		</select><br>
		<label>Room-Tags</label>
										<select oninput="this.className = ''" name="room" required="true">
											<option value="A~BLOCK">A~BLOCK</option>
											<option value="B~BLOCK">B~BLOCK</option>
											<option value="C~BLOCK">C~BLOCK</option>
											<option value="D~BLOCK">D~BLOCK</option>
											<option value="E~BLOCK">E~BLOCK</option>
											<option value="F~BLOCK">F~BLOCK</option>
											<option value="G~BLOCK">G~BLOCK</option>
											<option value="H~BLOCK">H~BLOCK</option>
											<option value="I~BLOCK">I~BLOCK</option>
										</select><br>


										<label>Room-NO</label>
										<select oninput="this.className = ''" name="roomnos" required="true">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
										</select><br>

										<label>Bulk</label>
										<select oninput="this.className = ''" name="bulk" required="true">
											<option value="Bulk-1">Bulk-1</option>
											<option value="Bulk-2">Bulk-2</option>
											<option value="Bulk-3">Bulk-3</option>
										</select>

										<label>Bed-Type</label>
										<select oninput="this.className = ''" name="bed" required="true">
											<option value="Upper-Bed 1">Upper-Bed 1</option>
											<option value="Lower-Bed 1">Lower-Bed 1</option>
											<option value="Upper-Bed 2">Upper-Bed 2</option>
											<option value="Lower-Bed 2">Lower-Bed 2</option>
											<option value="Upper-Bed 3">Upper-Bed 3</option>
											<option value="Lower-Bed 3">Lower-Bed 3</option>
										</select>


</div>


	
<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>
<!-- <button class="btn btn-sm" type="submit">Allocate</button> -->


<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <!-- <span class="step"></span> -->
  <!-- <span class="step"></span> -->
</div>

</form>
</div>
</div>


		
	</form>
	
</body>
<script type="text/javascript" src="bootstrap4/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="bootstrap4/js/popper.js"></script>
	<script type="text/javascript" src="bootstrap4/js/bootstrap.js"></script>

	<script>
	var currentTab = 0;
showTab(currentTab);

function showTab(n) {
 
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
     document.getElementById("nextBtn").removeAttribute('type','button',true);
     document.getElementById("nextBtn").setAttribute('type','submit',true);
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
    
  }
  return valid;
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}

</script>
</html>