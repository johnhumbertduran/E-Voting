<?php

	
	include("../connections.php");
	
	
	
	$createElectionName = $createElectionNameErr = "";

	if(isset($_POST["proceed"])){
	
		if(empty($_POST["createElectionName"])){
		
			$createElectionNameErr = "Fill Election Name First!";
		
		}else{
		
			$createElectionName = $_POST["createElectionName"];
			
			$check_query = mysqli_query($connections, "SELECT * from tblpres WHERE electionName='$createElectionName' ");
			$check_row = mysqli_num_rows($check_query);
		
			if($check_row > 0){
			
			$script = md5(rand(1,9));
			
				echo "<script>alert('$createElectionName already exists!'); window.location.href='?z_3=$script';</script>";
			
			}else{
			
			
			$getElectName = md5(rand(1,9));
			$create = md5(rand(1,9));
			$create2 = md5(rand(1,9));
			$create3 = md5(rand(1,9));
			
			echo "<script>window.location.href='?Election&&$create&&x_4=$create2&&Name=$create&&Now&&$create%%Created!&&getElectName=$getElectName&&createElectionName=$createElectionName&&$create';</script>";

			}
		
		}
	
	}
	

	
?>

<br/>
<br/>

<span class="error"><center><h2><?php echo $createElectionNameErr; ?></h2></center></span>
<br/>

	<center>
		<form method="POST" style="border:3px solid #fff; width:40%; height:50%; box-shadow:0 5px 10px #000;">

<br/>
<br/>
<h3 style="color:#fff;">Create Election Name</h3>

<br/>


		<input type="text" name="createElectionName" class="inTypes" style="height:20%; font-size:1.5em;" value="<?php echo $createElectionName; ?>" placeholder="Election Name">
		<input type="text" style="width:20%; font-weight:bold; height:20%; font-size:1.5em; text-align:center;" name="createElectionYear" class="inTypes" disabled value="<?php echo date("Y"); ?>">
		<br/>
		<br/>
		<br/>
		<input type="submit" name="proceed" value="Proceed" class="updateBtn" style="border:groove; font-size:1.3em; width:25%;">

	<br/>
	<br/>

		</form>
	</center>
	
	
