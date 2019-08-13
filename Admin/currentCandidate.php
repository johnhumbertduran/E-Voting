<?php

	session_start();

	include("../connections.php");
	include("navSaFrame.php");
	
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

?>



	

	<div>

		
	
</div>
