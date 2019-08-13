
<style>
	
	.nav{

display:none;

}

</style>

<?php

	include("../connections.php");
	include("nav.php");
	
	$ReadingElectionName = $_GET["ReadingElectionName"];
	$calculating=$_GET["calculating"];
	$ver=$_GET["ver"];
	$get_RecordCandidate=$_GET["get_RecordCandidate"];
	
	$newPres = $err = "";
	
	$id = $_GET["eh"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblpres where presID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Pres = $rowID["president"];
	
	}
	
	if(isset($_POST["update"])){
	
		if(empty($_POST["pres"])){
		
			$err = "Please input President Name";
		
		}else{
		
			$newPres = $_POST["pres"];
			$db_Pres = $newPres;
		
		}
	
	}

echo"

		<br/>
		<br/>
		<center><h2 class='error'>$err</h2></center>
		<br/>

<center>
<div style='width:20%; border:3px solid #fff;box-shadow:-1px 0 10px #333, 1px 0 10px #333, 0 1px 10px #333;'>
		<br/>
		<br/>
	<form method='POST'>

		<input type='text' name='pres' value='$db_Pres' class='inTypes'>
		<br/>
		<br/>
		<hr>

			<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em;'> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate' class='deleteBtn'>Cancel</a>
		
	</form>
</div>
</center>
";
?>