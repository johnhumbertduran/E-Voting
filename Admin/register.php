<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
<link rel="icon" type="image/png" href="Jh.jpg">
<title>Main Admin</title>

<script>

	function reSizeDept(){

			var waTop = document.getElementById("waGamit").style.top;
				//alert(waTop);
				document.getElementById("dept").style.top = waTop + 367 + "px";
	}

	var Category = {
	
		"1": ["Select Department First"],
		"BASE": ["BSED", "PolSci", "BSE"],
		"BEAD": ["BSBA", "BSA"],
		"CRIMSING": ["BSCrim", "BSN",],
		"HMTM": ["BSHM", "BSTM"],
		"ICS": ["BSIT", "BSCS", "ACT"],
	
	}
	
	
	function dept(value){
	
		if(value.length == 0) {
		
			document.getElementById("course").innerHTML == "<option></option>";
		
		}else{
		
			var dept_options = "";
			var cor = document.getElementById("course");
			var depart = document.getElementById("dept");
			var yar = document.getElementById("yearId");
			
			
			for(dept_name in Category[value]){
			
				dept_options += "<option name='course' value=' "+Category[value][dept_name]+" ' >"+Category[value][dept_name]+"</option>";
			
			}
			
			document.getElementById("course").innerHTML = dept_options;
			if(Category[value] == "Select Department First" ){
			
			cor.disabled = true;
			
			}else{
			
			cor.disabled = false;
				
			}
			
			document.getElementById("depCatch").value = document.getElementById("dept").value;

		}
	
	}
	
	
	function isNumberKey(evt){
	
		var charCode = (evt.which) ? evt.which : event.keyCode
		
		if(charCode > 31 && (charCode < 48 || charCode > 57) )
		
			return false;
			
		return true;
	
	}
	
	

</script>


</head>

<body onload="reSizeDept()">

<?php

	session_start();
	
	include("../connections.php");
	include("nav.php");
	
		echo "
	<script>
		document.getElementById('two').className = 'active';
	</script>
	";
	
	if(isset($_SESSION["userName"])){
	
		$userName = $_SESSION["userName"];
		
		$authentication = mysqli_query($connections, "SELECT * FROM tbluser WHERE firstName='$userName' ");
		$fetch = mysqli_fetch_assoc($authentication);
		$account_type = $fetch["account_type"];
	
		if($account_type != 1){
		
			echo "<script>window.location.href='../forbidden';</script>";
		
		}
	
	}else{
	
			echo "<script>window.location.href='../';</script>";
	
	}

	$department = $studentId = $firstName = $middleName = $lastName = $dept = $course = $year = $notif = $successNotif = "";
	$departmentErr = $studentIdErr = $firstNameErr = $middleNameErr = $lastNameErr = $courseErr = $yearErr= "";
	
	if(isset($_POST["register"])){
		
		if(empty($_POST["studentId"])){
		
			$studentIdErr = "Required!";
		
		}else{
		
			$studentId = $_POST["studentId"];
		
		}
		
		if(empty($_POST["firstName"])){
		
			$firstNameErr = "Required!";
		
		}else{
		
			$firstName = $_POST["firstName"];
		
		}
		
		if(empty($_POST["middleName"])){
		
			$middleNameErr = "Required!";
		
		}else{
		
			$middleName = $_POST["middleName"];
		
		}
		
		if(empty($_POST["lastName"])){
		
			$lastNameErr = "Required!";
		
		}else{
		
			$lastName = $_POST["lastName"];
		
		}
		
		if(empty($_POST["department"])){
		
			$departmentErr = "Required!";
		
		}else{
		
			$department = $_POST["department"];
		
		}
		
		if(empty($_POST["course"])){
		
			$courseErr = "Required!";
		
		}else{
		
			$course = $_POST["course"];
		
		}
		
		if(empty($_POST["year"])){
		
			$yearErr = "Required!";
		
		}else{
		
			$year = $_POST["year"];
		
		}
		
				
				
			
			
			
			
			
		
		if($studentId && $firstName && $middleName && $lastName && $course && $year){
		
			$checkStudentId = mysqli_query($connections, "SELECT * FROM tblUser WHERE studentId='$studentId' ");
			$check_row = mysqli_num_rows($checkStudentId);
		
			
		
		
		
		if($check_row > 0){
			$success = md5(rand(1,9));
			$end = md5(rand(1,9));
			echo "<script>alert('Sorry, Student ID already exists!');window.location.href='index?$success&&notify=Sorry, Student ID already exists!&&$end';</script>";

			
		
		}else{
			
				if(!preg_match("/^[a-zA-Z ]*$/", $firstName)){
				
					$firstNameErr = "Numbers are not allowed!";
				
				}else{
	
					if(!preg_match("/^[a-zA-Z ]*$/", $middleName)){
					
						$middleNameErr = "Numbers are not allowed!";
					
					}else{
					
						if(!preg_match("/^[a-zA-Z ]*$/", $lastName)){
						
							$lastNameErr = "Numbers are not allowed!";
						
						}else{
						
							$success = md5(rand(1,9));
							$end = md5(rand(1,9));			
		
		
								mysqli_query($connections, "INSERT INTO tbluser (studentId,firstName,middleName,lastName,department,course,year,account_type)
								VALUES('$studentId','$firstName','$middleName','$lastName','$department','$course','$year','2')");
		
								echo "<script>window.location.href='index.php?$success&&notify=Record has been successfully added!&&$end'; alert('Record has been successfully added!');</script>";

						
						}
					
					}
				
				}

			}
		
		}
	
	}


?>



<h1 style="text-align:center; color:#fff;">Register New Voter</h1>



<form method="POST">

	<center>
		<table border="0" width="32%">
			
				<tr><td><input type="text" class="inTypes" name="studentId" value="<?php echo $studentId; ?>" placeholder="Student ID" maxlength="8" onkeypress='return isNumberKey(event)'> <span class="error"><?php echo $studentIdErr; ?></span></td></tr>
				<tr></tr>
				<tr></tr>
				<tr><td><input type="text" class="inTypes"  name="firstName" value="<?php echo $firstName; ?>" placeholder="First Name"> <span class="error"><?php echo $firstNameErr; ?></span></td></tr>
				<tr></tr>
				<tr></tr>
				<tr><td><input type="text" class="inTypes"  name="middleName" value="<?php echo $middleName; ?>" placeholder="Middle Name"> <span class="error"><?php echo $middleNameErr; ?></span></td></tr>
				<tr></tr>
				<tr></tr>
				<tr><td><input type="text" class="inTypes"  name="lastName" value="<?php echo $lastName; ?>" placeholder="Last Name"> <span class="error"><?php echo $lastNameErr; ?></span></td></tr>
				
				<tr></tr>
				<tr></tr>
				<tr></tr>
				
				<tr>
					<td>
						<select name="dept" id="waGamit" class="inBoxes" disabled  >
							<option name="dept" value="">Select Department</option>
						</select>
							

						<select name="course" class="inBoxes"   id="course" disabled>
							<option name="course" value="">Select Department First</option>
						</select>
						<span class="error"><?php echo $courseErr; ?></span>
					</td>
			</tr>

					<tr></tr>
					<tr></tr>
				
				<tr>
					<td>
						<select name="year" class="inBoxes" id="yearId">
						<option name="year" value="">Select Year</option>
						<option name="year" value="First Year" <?php if($year == "First Year") {echo "selected";} ?> >First Year</option>
						<option name="year" value="Second Year" <?php if($year == "Second Year") {echo "selected";} ?>>Second Year</option>
						<option name="year" value="Third Year" <?php if($year == "Third Year") {echo "selected";} ?>>Third Year</option>
						<option name="year" value="Fourth Year" <?php if($year == "Fourth Year") {echo "selected";} ?>>Fourth Year</option>
						</select>
						<span class="error"><?php echo $yearErr; ?></span>
					</td>
				</tr>
				
				
				<tr><td ><hr></td></tr>
				<tr><td><input type="submit" class="inBoxes" name="register" value="Register"></td></tr>

		
		</table>
	</center>

<input type="hidden" name="department" id="depCatch">
</form>


		<select name="dept" class="inBoxes" id="dept" onChange="dept(this.value)">
			<option name="dept" value="1">Select Department</option>
			<option name="dept" value="BASE">BASE</option>
			<option name="dept" value="BEAD">BEAD</option>
			<option name="dept" value="CRIMSING">CRIMSING</option>
			<option name="dept" value="HMTM">HMTM</option>
			<option name="dept" value="ICS">ICS</option>
		</select>


		
<br/>
<br/>
<br/>
<footer>
 <hr>
<div class="footer">
<h4> &copy 2017 by John Humbert</h4>
</div> 
</footer>


 
</body>
</html> 

