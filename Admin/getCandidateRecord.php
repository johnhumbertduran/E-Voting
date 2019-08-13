
<!DOCTYPE html>
<head>
<style>

.tdTop{
color:#fff;
background:#ff1743;
padding:10px;
}

tr:nth-child(odd){
background:#fbbdc9;

}


tr:nth-child(even){
background:#fa8da2;

}

.electname{
box-shadow:0 1px 8px #000;
background-color:#1bbe1b;
border-radius:30px;
padding:10px;
color:#fff;
width:30%;
}

#modal{
background-color:rgba(0, 0, 0, .5);
display:none;
position:fixed;
overflow:auto;
height:100%;
width:100%;
z-index:1;
top:0;
left:0;
}

.modal-content{
background-color:#ff1743;
border:5px solid #fff;
position:absolute;
width:27%;
height:50%;
top:150px;
left:495px;
z-index:2;
}

.modal-content{    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.9s;
    animation-name: zoom;
    animation-duration: 0.9s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes zoom {
    from {transform: scale(0.1)} 
    to {transform: scale(1)}
}

.close{
background-color:#cc1616;
border-radius:50%;
position:absolute;
font-weight:bold;
font-size:1.5em;
padding:0 7px;
right:10px;
color:#fff;
z-index:3;
top:5px;
}

.close:hover{
background:#f00;
box-shadow:0 3px 8px #000;
}

.inTypes{
position:absolute;
top:130px;
left:100px;
}


.updateBtn{
padding:4px;
font-size: .9em;
}

.deleteBtn{
padding:4px;
font-size: .9em;

}

.candidateLabel{color:#fff;}
</style>

<script type="text/javascript">
function delete_id(id)
{
 if(confirm('Sure To Remove This Record ?'))
 {
  window.location.href='candidateRecord?delete_id'+id;
 }
}
</script>
</head>

<body onload="check()">

	<center>
	
	<?php




	$ReadingElectionName = $_GET["ReadingElectionName"];
	$checkPres = mysqli_query($connections, "SELECT * FROM tblpres WHERE electionName='$ReadingElectionName' ");
	$rowPres = mysqli_fetch_assoc($checkPres);
	$db_year = $rowPres["electionYear"];
	
	$calculating=$_GET["calculating"];
	$ver=$_GET["ver"];
	$get_RecordCandidate=$_GET["get_RecordCandidate"];

	$err = $newPres = $newVpres =  $newSec =  $newTreas =  $newSen =  $newGov =  $newVgov =  $newBoardMem =  $newCoun = "";
	

	
	echo "<h3 class='electname'>$ReadingElectionName $db_year</h3>"; 
	
	?>

		<table style="background-color:#fff;" width="100%">
	

	<tr>
	<td class="tdTop" style="width:10%;"><center>President</center></td>
	<td class="tdTop" style="width:10%;"><center>Vice President</center></td>
	<td class="tdTop" style="width:10%;"><center>Secretary</center></td>
	<td class="tdTop" style="width:10%;"><center>Treasurer</center></td>
	<td class="tdTop" style="width:10%;"><center>Senator</center></td>
	<td class="tdTop"><center>Governor || Department</center></td>
	<td class="tdTop"><center>Vice Governor || Department</center></td>
	<td class="tdTop"><center>Board Member</center></td>
	<td class="tdTop" style="width:10%;"><center>Councilor</center></td>
	</tr>

	<input type="text" id="catchy" value="">
		
	<?php
	
		include("../connections.php");
		
		$ReadingElectionName = $_GET["ReadingElectionName"];
		


	
	$checkPres = mysqli_query($connections, "SELECT * FROM tblpres WHERE electionName='$ReadingElectionName' ");
	$checkVpres = mysqli_query($connections, "SELECT * FROM tblvpres WHERE electionName='$ReadingElectionName' ");
	$checkSec = mysqli_query($connections, "SELECT * FROM tblsecretary WHERE electionName='$ReadingElectionName' ");
	$checkTreas = mysqli_query($connections, "SELECT * FROM tbltreasurer WHERE electionName='$ReadingElectionName' ");
	$checkSen = mysqli_query($connections, "SELECT * FROM tblsenator WHERE electionName='$ReadingElectionName' ");
	$checkGov = mysqli_query($connections, "SELECT * FROM tblgov WHERE electionName='$ReadingElectionName' ");
	$checkVgov = mysqli_query($connections, "SELECT * FROM tblvgov WHERE electionName='$ReadingElectionName' ");
	$checkBoardMem = mysqli_query($connections, "SELECT * FROM tblboardmem WHERE electionName='$ReadingElectionName' ");
	$checkCoun = mysqli_query($connections, "SELECT * FROM tblcouncilor WHERE electionName='$ReadingElectionName' ");
	
	while(($rowPres = mysqli_fetch_assoc($checkPres)) | 
	($rowVpres = mysqli_fetch_assoc($checkVpres)) | 
	($rowSec = mysqli_fetch_assoc($checkSec)) |
	($rowTreas = mysqli_fetch_assoc($checkTreas)) |
	($rowSen = mysqli_fetch_assoc($checkSen)) |
	($rowGov = mysqli_fetch_assoc($checkGov)) |
	($rowVgov = mysqli_fetch_assoc($checkVgov)) |
	($rowBoardMem = mysqli_fetch_assoc($checkBoardMem)) |
	($rowCoun = mysqli_fetch_assoc($checkCoun)) ){
	
	$db_Pres = $rowPres["president"];
	$idMe = $rowPres["presID"];


	$db_Vpres = $rowVpres["vicePresident"];
	$idVpres = $rowVpres["vPresID"];


	$db_Sec = $rowSec["secretary"];
	$idSec = $rowSec["secID"];


	$db_Treas = $rowTreas["treasurer"];
	$idTreas = $rowTreas["treasID"];


	$db_Sen = $rowSen["senator"];
	$idSen = $rowSen["senID"];


	$db_GovDept = $rowGov["govDepartment"];
	$db_Gov = $rowGov["governor"];
	$idGov = $rowGov["govID"];


	$db_VgovDept = $rowVgov["viceGovDepartment"];
	$db_Vgov = $rowVgov["viceGovernor"];
	$idVgov = $rowVgov["vGovID"];

	
	$db_BoardMem = $rowBoardMem["boardMember"];
	$idBoardMem = $rowBoardMem["boardMemID"];


	$db_Coun = $rowCoun["councilor"];
	$idCoun = $rowCoun["counID"];


	$db_year = $rowPres["electionYear"];
	

	$script = md5(rand(0,9));
	$ola = md5(rand(0,9));
	$golaf = md5(rand(0,9));

	
	// !!!!!!!!!!!!!____$#######_____copy du href peo ubra it get method pr sa delete____#########____!!!!!!!
	echo"
	

		<form method='POST'>
	<tr>
		<td style='padding:10px;' class='pra'><center>$db_Pres";?><?php if(empty($db_Pres)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&eh=$idMe h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehDel=$idMe h 9 9 $ola' class='deleteBtn' name='delete' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
		<td style='padding:10px;'><center>$db_Vpres";?><?php if(empty($db_Vpres)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehVpres=$idVpres h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehVpresDel=$idVpres h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
		<td style='padding:10px;'><center>$db_Sec";?><?php if(empty($db_Sec)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehSec=$idSec h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehSecDel=$idSec h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
		<td style='padding:10px;'><center>$db_Treas";?><?php if(empty($db_Treas)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehTreas=$idTreas h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehTreasDel=$idTreas h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
		<td style='padding:10px;'><center>$db_Sen";?><?php if(empty($db_Sen)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehSen=$idSen h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehSenDel=$idSen h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
		<td style='padding:10px;'><center>";?>
		
		<?php if(empty($db_Gov)){}else{echo "$db_Gov || $db_GovDept<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehGov=$idGov h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehGovDel=$idGov h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>"; } ?><?php echo"</center></td>
		<td style='padding:10px;'><center>";?>
		<?php if(empty($db_Vgov)){}else{echo "$db_Vgov || $db_VgovDept<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehVgov=$idVgov h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehVgovDel=$idVgov h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>"; } ?><?php echo"</center></td>
		<td style='padding:10px;'><center>$db_BoardMem";?><?php if(empty($db_BoardMem)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehBoardMem=$idBoardMem h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehBoardMemDel=$idBoardMem h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
		<td style='padding:10px;'><center>$db_Coun";?><?php if(empty($db_Coun)){ }else{echo"<br/><br/> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehCoun=$idCoun h 9 9 $ola' class='updateBtn' style='cursor: pointer;'>Update</a> <a href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&ehCounDel=$idCoun h 9 9 $ola' class='deleteBtn' style='cursor: pointer;'>Delete</a>";} ?><?php echo"</center></td>
	</tr>
	
	
	</form>
	
	";

	
	
	}
	
	

	// _______________________President___________here


	if(empty($_GET["eh"])){
	
	}else{
		
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
		
		if($newPres){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblpres WHERE president ='$db_Pres' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblpres SET president = '$db_Pres' WHERE presID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="pres" value="<?php echo $db_Pres; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">President</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>


	<?php
	}
	
	?>

	<?php

	if(empty($_GET["ehDel"])){
	
	}else{
		
		$id = $_GET["ehDel"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblpres where presID='$id' ");
	
	$rowID = mysqli_fetch_assoc($getID);
	
	$db_Pres = $rowID["president"];
	
	
	
			if(isset($_POST["delete"])){
	
		mysqli_query($connections, "DELETE FROM tblpres WHERE presID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
		
		
	
	}

	
	?>

	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
							<h1 class="candidateLabel">President</h1>
				</br>
				</br>
				</br>
				<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Pres;?></font><?php echo " ?"; ?></b></font>
				
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>
	
	<!-- _______________________Vice___________________President___________here -->

	<?php
	if(empty($_GET["ehVpres"])){
	
	}else{
		
		$id = $_GET["ehVpres"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblvpres where vPresID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_vPres = $rowID["vicePresident"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["vPres"])){
		
			$err = "Please input Vice President Name";
		
		}else{
		
			$newVpres = $_POST["vPres"];
			$db_vPres = $newVpres;
		
		}
		
		if($newVpres){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblvpres WHERE vicePresident ='$db_Vpres' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblvpres SET vicePresident = '$db_Vpres' WHERE vPresID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="vPres" value="<?php echo $db_Vpres; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Vice President</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>

	<?php

	if(empty($_GET["ehVpresDel"])){
	
	}else{
		
		$id = $_GET["ehVpresDel"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblvpres where vPresID='$id' ");
	
	$rowID = mysqli_fetch_assoc($getID);
	
	$db_vPres = $rowID["vicePresident"];
	
	
	
			if(isset($_POST["delete"])){
	
		mysqli_query($connections, "DELETE FROM tblvpres WHERE vPresID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
		
		
	
	}

	
	?>

	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
							<h1 class="candidateLabel">Vice President</h1>
				</br>
				</br>
				</br>
				<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_vPres;?></font><?php echo " ?"; ?></b></font>
				
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>


		<!-- _______________________Secretary___________here -->

	<?php
	if(empty($_GET["ehSec"])){
	
	}else{
		
		$id = $_GET["ehSec"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblsecretary where secID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Sec = $rowID["secretary"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["sec"])){
		
			$err = "Please input Secretary Name";
		
		}else{
		
			$newSec = $_POST["sec"];
			$db_Sec = $newSec;
		
		}
		
		if($newSec){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblsecretary WHERE secretary ='$db_Sec' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblsecretary SET secretary = '$db_Sec' WHERE secID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="sec" value="<?php echo $db_Sec; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Secretary</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>

	<?php

if(empty($_GET["ehSecDel"])){

}else{
	
	$id = $_GET["ehSecDel"];

$getID = mysqli_query($connections, "SELECT * FROM tblsecretary where secID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_Sec = $rowID["secretary"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tblsecretary WHERE secID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Secretary</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Sec;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>

		<!-- ___________________________Treasurer_____________ -->

	<?php
	if(empty($_GET["ehTreas"])){
	
	}else{
		
		$id = $_GET["ehTreas"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tbltreasurer where treasID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Treas = $rowID["treasurer"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["treas"])){
		
			$err = "Please input Treasurer Name";
		
		}else{
		
			$newTreas = $_POST["treas"];
			$db_Treas = $newTreas;
		
		}
		
		if($newTreas){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tbltreasurer WHERE treasurer ='$db_Treas' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tbltreasurer SET treasurer = '$db_Treas' WHERE treasID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="treas" value="<?php echo $db_Treas; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Treasurer</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>
	
	<?php

if(empty($_GET["ehTreasDel"])){

}else{
	
	$id = $_GET["ehTreasDel"];

$getID = mysqli_query($connections, "SELECT * FROM tbltreasurer where treasID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_Treas = $rowID["treasurer"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tbltreasurer WHERE treasID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Treasurer</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Treas;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>

	<!-- ___________________________Senator_____________ -->

	<?php
	if(empty($_GET["ehSen"])){
	
	}else{
		
		$id = $_GET["ehSen"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblsenator where senID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Sen = $rowID["senator"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["sen"])){
		
			$err = "Please input Senator Name";
		
		}else{
		
			$newSen = $_POST["sen"];
			$db_Sen = $newSen;
		
		}
		
		if($newSen){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblsenator WHERE senator ='$db_Sen' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblsenator SET senator = '$db_Sen' WHERE senID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="sen" value="<?php echo $db_Sen; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Senator</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>
	
	<?php

if(empty($_GET["ehSenDel"])){

}else{
	
	$id = $_GET["ehSenDel"];

$getID = mysqli_query($connections, "SELECT * FROM tblsenator where senID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_Sen = $rowID["senator"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tblsenator WHERE senID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Senator</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Sen;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>

		<!-- ___________________________Governor_____________ -->

	<?php
	if(empty($_GET["ehGov"])){
	
	}else{
		
		$id = $_GET["ehGov"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblgov where govID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Gov = $rowID["governor"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["gov"])){
		
			$err = "Please input Governor Name";
		
		}else{
		
			$newGov = $_POST["gov"];
			$db_Gov = $newGov;
		
		}
		
		if($newGov){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblgov WHERE governor ='$db_Gov' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblgov SET governor = '$db_Gov' WHERE govID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="gov" value="<?php echo $db_Gov; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Governor</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>
	
	<?php

if(empty($_GET["ehGovDel"])){

}else{
	
	$id = $_GET["ehGovDel"];

$getID = mysqli_query($connections, "SELECT * FROM tblgov where govID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_Gov = $rowID["governor"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tblgov WHERE govID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Governor</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Gov;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>

		<!-- ___________________________Vice Governor_____________ -->

	<?php
	if(empty($_GET["ehVgov"])){
	
	}else{
		
		$id = $_GET["ehVgov"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblvgov where vGovID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Vgov = $rowID["viceGovernor"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["vGov"])){
		
			$err = "Please input Vice Governor Name";
		
		}else{
		
			$newVgov = $_POST["vGov"];
			$db_Vgov = $newVgov;
		
		}
		
		if($newVgov){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblvgov WHERE viceGovernor ='$db_Vgov' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblvgov SET viceGovernor = '$db_Vgov' WHERE vGovID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="vGov" value="<?php echo $db_Vgov; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Vice Governor</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>
	
	<?php

if(empty($_GET["ehVgovDel"])){

}else{
	
	$id = $_GET["ehVgovDel"];

$getID = mysqli_query($connections, "SELECT * FROM tblvgov where vGovID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_Vgov = $rowID["viceGovernor"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tblvgov WHERE vGovID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Vice Governor</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Vgov;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>

		<!-- ___________________________Board Member_____________ -->

	<?php
	if(empty($_GET["ehBoardMem"])){
	
	}else{
		
		$id = $_GET["ehBoardMem"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblboardmem where boardMemID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_BoardMem = $rowID["boardMember"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["boardMem"])){
		
			$err = "Please input Board Member Name";
		
		}else{
		
			$newBoardMem = $_POST["boardMem"];
			$db_BoardMem = $newBoardMem;
		
		}
		
		if($newBoardMem){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblboardmem WHERE boardMember ='$db_BoardMem' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblboardmem SET boardMember = '$db_BoardMem' WHERE boardMemID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="boardMem" value="<?php echo $db_BoardMem; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Board Member</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}
	
	?>
	
	<?php

if(empty($_GET["ehBoardMemDel"])){

}else{
	
	$id = $_GET["ehBoardMemDel"];

$getID = mysqli_query($connections, "SELECT * FROM tblboardmem where boardMemID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_BoardMem = $rowID["boardMember"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tblboardmem WHERE boardMemID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Board Member</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_BoardMem;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>


		<!-- ___________________________Councilor_____________ -->

	<?php
	if(empty($_GET["ehCoun"])){
	
	}else{
		
		$id = $_GET["ehCoun"];
	
	$getID = mysqli_query($connections, "SELECT * FROM tblcouncilor where counID='$id' ");
	
	while($rowID = mysqli_fetch_assoc($getID)){
	
		$db_Coun = $rowID["councilor"];
	
	}
	
			if(isset($_POST["update"])){
	
		if(empty($_POST["coun"])){
		
			$err = "Please input Board Member Name";
		
		}else{
		
			$newCoun = $_POST["coun"];
			$db_Coun = $newCoun;
		
		}
		
		if($newCoun){
		
			$checkCandidate = mysqli_query($connections, "SELECT * FROM tblcouncilor WHERE councilor ='$db_Coun' ");
			$checkRow = mysqli_num_rows($checkCandidate);
			
			if($checkRow > 0){

				$err = "Name already exists!";
				
				}else{
		
		mysqli_query($connections, "UPDATE tblcouncilor SET councilor = '$db_Coun' WHERE counID = '$id' ");

			echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
			
			}
		}
		
		
	
	}
	
	
	
	?>
	
	<div id="modal">
		<div class="modal-content">
			<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
				<form method="POST">
					<input type="text" name="coun" value="<?php echo $db_Coun; ?>" class="inTypes">
				
							<br/>
							<h1 class="candidateLabel">Councilor</h1>
							<span class="error"><?php echo $err; ?></span>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
					
					<input type='submit' value='Update' name='update' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
				</form>
				
		</div>
	</div>

	<?php
	}

	?>
	
	<?php

if(empty($_GET["ehCounDel"])){

}else{
	
	$id = $_GET["ehCounDel"];

$getID = mysqli_query($connections, "SELECT * FROM tblcouncilor where counID='$id' ");

$rowID = mysqli_fetch_assoc($getID);

$db_Coun = $rowID["councilor"];



		if(isset($_POST["delete"])){

	mysqli_query($connections, "DELETE FROM tblcouncilor WHERE counID = '$id' ");

		echo"<script>window.location.href='candidateRecord?ReadingElectionName=$ReadingElectionName&&calculating=$calculating&&ver=$ver&&get_RecordCandidate=$get_RecordCandidate &&$ola'; alert('Record succesfully Updated!');</script>";
	
	

}


?>

<div id="modal">
	<div class="modal-content">
		<div class="close" onclick="closeB()" style="cursor:pointer;">X</div>
			<form method="POST">
						<h1 class="candidateLabel">Councilor</h1>
			</br>
			</br>
			</br>
			<font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" color="blue"><b><?php echo "Are you sure you want to delete "?></br><font style="text-shadow:0 2px 1px #fff, 0 -2px 1px #fff, 2px 0 1px #fff, -2px 0 1px #fff;" size="5em" color="green"><?php echo $db_Coun;?></font><?php echo " ?"; ?></b></font>
			
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
				
				<input type='submit' value='Delete' name='delete' class='updateBtn' style='border:none; padding:8px; font-size:1em; cursor:pointer;'> <a  class='deleteBtn' style=" padding:8.5px; font-size:1em; cursor:pointer;" onclick="closeB()">Cancel</a>
			</form>
			
	</div>
</div>

	<?php
	}

	?>




		</table>
	
	</center>
	
	<script>

		var presi = document.getElementsByClassName("pra").value;
	
	function check(){
		document.getElementById("modal").setAttribute("style","display:block;");
		
	}
	
	function closeB(){
		document.getElementById("modal").setAttribute("style","display:none;");
	}
	
	
	</script>

</body>
</html>	
	
	
	
	