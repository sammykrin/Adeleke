<!DOCTYPE html>
<html>
<head>
	<title>try</title>
	<style>
		#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
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

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
	</style>
</head>
<body>


<form id="regForm" action="">

<h1>Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
</div>

<div class="tab">Contact Info:
  <p><input type="email" required="true" placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>

</body>
<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:2
  x[n].className += " active";
}
</script>
</html>
<!-- <style>
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
	#ground{
		background-color:#065D8A;
	}
	#card{
			opacity: 0.9;
			filter: alpha(opacity=710);
			background-color: transparent;
			background-color: yellow;
		}

	</style> -->
<!-- <div class="container" id="ground">
		<div class="row">
			<div class="col-md-12 mt-3">
					<div class="card" id="card">
						<div class="card-body">
							<form action="formreg.php" method="post" enctype="multipart/form-data">
							<label>Name:</label>
							<input type="text" name="Full_Name" placeholder="Your Full Name"  id="text" required="true">

							<label>Course:</label>
							<input type="text" name="Course" placeholder="Course"  id="text"  required="true">

							<label>Matric_No:</label>
							<input type="text" name="Matric_No" placeholder="Matric~No"  id="text"  required="true">

							<label>Level:</label>
							<input type="text" name="Level" placeholder="Level"  id="text"  required="true">

							<label>D.O.B:</label>
							<input type="text" name="DOB" placeholder="D.O.B"  id="text"  required="true">

							<label>Religion/Denomination:</label>
							<input type="text" name="Religion/Denomination" placeholder="Religion~Denomination"  id="text"  required="true">

							<label>Home_Addres:</label>
							<input type="text" name="Home_Address" placeholder="Home~Addres"  id="text"  required="true">

							<label>Email_Address:</label>
							<input type="email" name="Email_Address" placeholder="Email~Address"  id="text"  required="true">

							<label>Student_Phone_No:</label>
							<input type="text" name="Student_Phone_No" placeholder="Student~Phone~No"  id="text"  required="true">

							<label>Parent_Phone_No:</label>
							<input type="text" name="Parent_Phone_No" placeholder="Parent~Phone~No"  id="text"  required="true">

							<label>Passport</label>
							<input type="file" name="passport"  id="text"  required="true">
									<div>
										<label>Gender:</label>
							<input type="radio" name="radio" value="male">male
							<input type="radio" name="radio" value="female">female	
									</div>

									<label>Choose-Hostel</label>
										<select>
											<option>male</option>
											<option>female</option>
										</select>
										<label>Room-Tags</label>
										<select>
											<option>A~BLOCK</option>
											<option>B~BLOCK</option>
											<option>C~BLOCK</option>
											<option>D~BLOCK</option>
											<option>E~BLOCK</option>
											<option>F~BLOCK</option>
											<option>G~BLOCK</option>
											<option>H~BLOCK</option>
											<option>I~BLOCK</option>
										</select><br>

										<label>Room-NO</label>
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
										</select>

										<label>Bed-Type</label>
										<select>
											<option>Upper-Bed 1</option>
											<option>Lower-Bed 1</option>
											<option>Upper-Bed 2</option>
											<option>Lower-Bed 2</option>
											<option>Upper-Bed 3</option>
											<option>Lower-Bed 3</option>
										</select>
										<br>

									
							<button class="btn btn-sm" type="submit">Allocate</button>

							</form>
						</div>
						
					</div>
				
			</div>
			
		</div>
		
	</div>
 -->