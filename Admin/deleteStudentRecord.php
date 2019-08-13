<?php


	
	
	$id = $_GET["id"];
	
	$delete_query = mysqli_query($connections, "SELECT * FROM tbluser WHERE id = $id");
	
	$get_del = mysqli_fetch_assoc($delete_query);
	
	$db_studentId = $get_del["studentId"];
	$db_firstName = $get_del["firstName"];
	$db_middleName = $get_del["middleName"];
	$db_lastName = $get_del["lastName"];
	$db_department = $get_del["department"];
	$db_course = $get_del["course"];
	$db_year = $get_del["year"];

	$fullname = ucfirst($db_firstName) . " " . ucfirst($db_middleName[0]) . ". " . ucfirst($db_lastName);
	
	if(isset($_POST["delete"])){
	
		mysqli_query($connections, "DELETE FROM tbluser WHERE id = '$id' ");
		
		echo "<script>window.location.href='studentRecord?notify=$fullname has been deleted successfully!'; alert('Record has been deleted successfully!');</script>";
	
	}
	
?>


<br/>
<br/>
<br/>

<center>

		<form method="POST" style="border:3px solid #eee; width:50%; box-shadow:0 5px 5px #000;">

			<h3>Do you want to <font color="red"><b><u>DELETE</u></b></font> this record?</h3>
			<p style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;"><font color="blue"><b><?php echo " | " . $db_studentId . " | " . $fullname . " | " . $db_department . " | " . $db_course . " | " . $db_year . " | "; ?></b></font></p>
			<br/>
			<input type="submit" name="delete" value="Confirm" class="updateBtn" style="border:groove; font-size:1em;">
			<a href="?" class="deleteBtn" style="border:2px groove #fff; padding:10px;">Cancel</a>
			
			<br/>
			<br/>
			
		</form>


</center>