
<style>

.tdTop{
color:#fff;
background:#ff1743;
padding-top:10px;
padding-bottom:7px;
}


tr:nth-child(odd){
background:#fbbdc9;

}


tr:nth-child(even){
background:#fa8da2;

}

</style>

<br/>
<h1 style="text-align:center; color:#fff;">Student Records</h1>
<br/>



<center>

<table border="0" width="80%" style="background:#fff; ">
	
	<tr>
	
		<td width="10%" class="tdTop"><center><b>Student ID</b></center></td>
		<td width="16%" class="tdTop"><center><b>Name</b></center></td>
		<td width="16%" class="tdTop"><center><b>Department</b></center></td>
		<td width="16%" class="tdTop"><center><b>Course</b></center></td>
		<td width="14%" class="tdTop"><center><b>Year</b></center></td>
		<td width="16%" class="tdTop"><center><b>Action</b></center></td>
	
	</tr>





<?php

	include("../connections.php");
	
	
	$retrieve_query = mysqli_query($connections,"SELECT * FROM tbluser WHERE account_type='2' ");
	
	while($row_users = mysqli_fetch_assoc($retrieve_query)){
	
	$id = $row_users["id"];
	
	$db_studentId = $row_users["studentId"];
	$db_firstName = $row_users["firstName"];
	$db_middleName = $row_users["middleName"];
	$db_lastName = $row_users["lastName"];
	$db_department = $row_users["department"];
	$db_course = $row_users["course"];
	$db_year = $row_users["year"];
	
	$fullName = ucfirst($db_firstName) . " " . ucfirst($db_middleName[0]) . ". " . ucfirst($db_lastName);
	
		$jScript = md5(rand(1,9));
		
		$new_Script = md5(rand(1,9));
		
		$get_Update = md5(rand(1,9));
		
		$get_Delete = md5(rand(1,9));
	
	
		echo"
		
		<tr>
		
			<td><center>$db_studentId</center></td>
			<td><center>$fullName</center></td>
			<td><center>$db_department</center></td>
			<td><center>$db_course</center></td>
			<td><center>$db_year</center></td>
			<td>
				<center>
					<br/>
					
					<a href='	?jScript=$jScript && newScript=$new_Script && get_Update=$get_Update && id=$id ' class='updateBtn'>Update</a>
					
					&nbsp
					
					<a href='	?jScript=$jScript && newScript=$new_Script && get_Delete=$get_Delete && id=$id ' class='deleteBtn'>Delete</a>
					
					<br/>
					<br/>
				</center>
			</td>
		
		</tr>";
		
		echo "
		
		
		";
		
		
	
	}

	

	?>




</table>

</center>

