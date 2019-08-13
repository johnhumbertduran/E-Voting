<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
<link rel="icon" type="image/png" href="Jh.jpg">
<title>Update Record</title>

<script>

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
			
				dept_options += "<option name='course' value=' " + Category[value][dept_name] + " ' >" + Category[value][dept_name] + "</option>";
			
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

<body>

<?php



	

	$id = $_GET["id"];

	$getRecord = mysqli_query($connections, "SELECT * FROM tbluser WHERE id='$id' ");
	
	while($get = mysqli_fetch_assoc($getRecord)){
	
		$db_studentId = $get["studentId"];
		$db_firstName = $get["firstName"];
		$db_middleName = $get["middleName"];
		$db_lastName = $get["lastName"];
		$db_department = $get["department"];
		$db_course = $get["course"];
		$db_year = $get["year"];
	
	}
	
	$newDepartment = $newStudentId = $newFirstName = $newMiddleName = $newLastName = $newCourse = $newYear = "";
	$newStudentIdErr = $newFirstNameErr = $newMiddleNameErr = $newLastNameErr = $newCourseErr = $newYearErr = "";
	
	if(isset($_POST["register"])){
	
		if(empty($_POST["newStudentId"])){
		
			$newStudentIdErr = "Required!";
		
		}else{
		
			$newStudentId = $_POST["newStudentId"];
			$db_studentId = $newStudentId;
		
		}
		
		if(empty($_POST["newFirstName"])){
		
			$newFirstNameErr = "Required!";
		
		}else{
		
			$newFirstName = $_POST["newFirstName"];
			$db_firstName = $newFirstName;
		
		}
		
		if(empty($_POST["newMiddleName"])){
		
			$newMiddleNameErr = "Required!";
		
		}else{
		
			$newMiddleName = $_POST["newMiddleName"];
			$db_middleName = $newMiddleName;
		
		}
		
		if(empty($_POST["newLastName"])){
		
			$newLastNameErr = "Required!";
		
		}else{
		
			$newLastName = $_POST["newLastName"];
			$db_lastName = $newLastName;
		
		}
		
		if(empty($_POST["newDepartment"])){
		
		
		}else{
		
			$newDepartment = $_POST["newDepartment"];
			$db_department = $newDepartment;
		
		}
		
		if(empty($_POST["newCourse"])){
		
			$newCourseErr = "Required!";
		
		}else{
		
			$newCourse = $_POST["newCourse"];
			$db_course = $newCourse;
		
		}
		
		if(empty($_POST["newYear"])){
		
			$newYearErr = "Required!";
		
		}else{
		
			$newYear = $_POST["newYear"];
			$db_year = $newYear;
		
		}
		
		
		
		
		if($newStudentId && $newFirstName && $newMiddleName && $newLastName && $newDepartment && $newCourse && $newYear){
		
		if(!preg_match("/^[a-zA-Z ]*$/", $newFirstName)){
				
					$newFirstNameErr = "Numbers are not allowed!";
				
				}else{
	
					if(!preg_match("/^[a-zA-Z ]*$/", $newMiddleName)){
					
						$newMiddleNameErr = "Numbers are not allowed!";
					
					}else{
					
						if(!preg_match("/^[a-zA-Z ]*$/", $newLastName)){
						
							$newLastNameErr = "Numbers are not allowed!";
						
						}else{
						
								include("../connections.php");
		
								mysqli_query($connections, "UPDATE tbluser SET 
								
									studentId = '$db_studentId',
									firstName = '$db_firstName',
									middleName = '$db_middleName',
									lastName = '$db_lastName',
									department = '$db_department',
									course = '$db_course',
									year = '$db_year' WHERE id = '$id'
								
								");

								$updating = md5(rand(1,9));
								$encrypt = md5(rand(1,9));			
		
								echo "<script>window.location.href='studentRecord?$updating&&notify=Record has been successfully updated!&&$encrypt'; alert('Record has been successfully updated!');</script>";

						
						}
					
					}
				
				}
		
		}
	
	}
	
?>



<h1 style="text-align:center; color:#fff;">Update Voter</h1>

<form method="POST">

<center>
	<table border="0" width="32%">
				<tr><td><input type="text" class="inBoxes inTypes" name="newStudentId" value="<?php echo $db_studentId; ?>" placeholder="Student ID" maxlength="8" onkeypress='return isNumberKey(event)'> <span class="error"><?php echo $newStudentIdErr; ?></span> </td></tr>
				<tr></tr>
				<tr></tr>
				<tr><td><input type="text" class="inBoxes inTypes" name="newFirstName" value="<?php echo $db_firstName; ?>" placeholder="First Name"> <span class="error"><?php echo $newFirstNameErr; ?></span> </td></tr>
				<tr></tr>
				<tr></tr>
				<tr><td><input type="text" class="inBoxes inTypes" name="newMiddleName" value="<?php echo $db_middleName; ?>" placeholder="Middle Name"> <span class="error"><?php echo $newMiddleNameErr; ?></span> </td></tr>
				<tr></tr>
				<tr></tr>
				<tr><td><input type="text" class="inBoxes inTypes" name="newLastName" value="<?php echo $db_lastName; ?>" placeholder="Last Name"> <span class="error"><?php echo $newLastNameErr; ?></span> </td></tr>
				
				<tr></tr>
				<tr></tr>
				<tr></tr>
		
				<tr>
					<td>
						<select name="dept" id="waGamit" class="inBoxes" disabled  >
							<option name="dept" value="">Select Department</option>
						</select>
				
				
						<select name="newCourse" class="inBoxes"   id="course" disabled>
							<option name="newCourse" value="<?php echo $db_course; ?>"><?php echo $db_course; ?></option>
						</select>
						<span class="error"><?php echo $newCourseErr; ?></span>
					</td>
				</tr>
				
					<tr></tr>
					<tr></tr>
				
				<tr>
					<td>
						<select name="newYear" class="inBoxes" id="yearId">
						<option name="newYear" value="">Select Year</option>
						<option name="newYear" value="First Year" <?php if($db_year == "First Year") {echo "selected";} ?> >First Year</option>
						<option name="newYear" value="Second Year" <?php if($db_year == "Second Year") {echo "selected";} ?>>Second Year</option>
						<option name="newYear" value="Third Year" <?php if($db_year == "Third Year") {echo "selected";} ?>>Third Year</option>
						<option name="newYear" value="Fourth Year" <?php if($db_year == "Fourth Year") {echo "selected";} ?>>Fourth Year</option>
						</select>
						<span class="error"><?php echo $newYearErr; ?></span>
					</td>
				</tr>
				
				
				<tr><td ><hr></td></tr>
				<tr><td><input type="submit" class="inBoxes" name="register" value="Register"></td></tr>
	</table>

</center>
	
<input type="hidden" name="newDepartment" id="depCatch" value="<?php echo $db_department; ?>">
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
<footer>
 <hr>
<div class="footer">
<h4> &copy 2017 by John Humbert</h4>
</div> 
</footer>
 
 <script>
	
	document.getElementById("dept").value = document.getElementById("depCatch").value;
 
 </script>
 
 
</body>
</html> 

















