
<?php


	include("../connections.php");
	
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
	
	
	
	$warning = $president = $vicePresident = $secretary = $treasurer = $senator = "";
	$governor = $govDep =  $viceGovernor = $vGovDep = $boardMember = $councilor =  $electionName =  "";
	$electionYear = date("Y");
	
	
	if(isset($_POST["addPres"])){
	
		if(empty($_POST["president"])){
		
			$warning = "Please fill President before adding!";
		
		}else{

			$electionName = $_GET['createElectionName'];
			$president = $_POST["president"];
		
		}
		
		if($president && $electionName){
		
		$checkPres = mysqli_query($connections, "SELECT * FROM tblpres WHERE president='$president' ");
		$pres_row = mysqli_num_rows($checkPres);
		
			
		
		
		
		if($pres_row > 0){
			echo "<script>alert('Sorry, $president already exists!');</script>";

			
			}else{
		
			mysqli_query($connections, "INSERT INTO tblpres (president,electionName,electionYear) VALUES ('$president','$electionName','$electionYear')");
			
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			echo"<script>alert('$president successfully added!');</script>";
			
			}
		
		}
	
	}

	
	if(isset($_POST["addVpress"])){
	
		if(empty($_POST["vicePresident"])){
		
			$warning = "Please fill Vice President before adding!";
		
		}else{
		
			$electionName = $_GET['createElectionName'];
			$vicePresident = $_POST["vicePresident"];
		
		}
		
		if($vicePresident && $electionName){
		
		
			$checkVPres = mysqli_query($connections, "SELECT * FROM tblvpres WHERE vicePresident='$vicePresident' ");
			$vpres_row = mysqli_num_rows($checkVPres);
		
			
		
		
		
		if($vpres_row > 0){
			echo "<script>alert('Sorry, $vicePresident already exists!');</script>";

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblvpres (vicePresident,electionName,electionYear) VALUES ('$vicePresident','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$vicePresident successfully added!');</script>";
		
			}
		}
	
	}
	
	if(isset($_POST["addSec"])){
	
		if(empty($_POST["secretary"])){
		
			$warning = "Please fill Secretary before adding!";
		
		}else{
			
			$electionName = $_GET['createElectionName'];
			$secretary = $_POST["secretary"];
		
		}
		
		if($secretary && $electionName){
		
			$checksec = mysqli_query($connections, "SELECT * FROM tblsecretary WHERE secretary='$secretary' ");
			$sec_row = mysqli_num_rows($checksec);
		
			
		
		
		
		if($sec_row > 0){
			echo "<script>alert('Sorry, $secretary already exists!');</script>";

			
			}else{
			
			
			mysqli_query($connections, "INSERT INTO tblsecretary (secretary,electionName,electionYear) VALUES ('$secretary','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$secretary successfully added!');</script>";
		
			}
		}
	
	}
	
	if(isset($_POST["addTreas"])){
	
		if(empty($_POST["treasurer"])){
		
			$warning = "Please fill Treasurer before adding!";
		
		}else{
		
			$electionName = $_GET['createElectionName'];
			$treasurer = $_POST["treasurer"];
		
		}
		
		if($treasurer && $electionName){
		
			$checktreas = mysqli_query($connections, "SELECT * FROM tbltreasurer WHERE treasurer='$treasurer' ");
			$treas_row = mysqli_num_rows($checktreas);
		
			
		
		
		
		if($treas_row > 0){
			echo "<script>alert('Sorry, $treasurer already exists!');</script>";

			
			}else{
			
		
			mysqli_query($connections, "INSERT INTO tbltreasurer (treasurer,electionName,electionYear) VALUES ('$treasurer','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$treasurer successfully added!');</script>";
		
			}
		}
	
	}
	
	if(isset($_POST["addSen"])){
	
		if(empty($_POST["senator"])){
		
			$warning = "Please fill Senator before adding!";
		
		}else{
		
			$electionName = $_GET['createElectionName'];
			$senator = $_POST["senator"];
		
		}
		
		if($senator && $electionName){
		
		
			$checksen = mysqli_query($connections, "SELECT * FROM tblsenator WHERE senator='$senator' ");
			$sen_row = mysqli_num_rows($checksen);
		
			
		
		
		
		if($sen_row > 0){
			echo "<script>alert('Sorry, $senator already exists!');</script>";

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblsenator (senator,electionName,electionYear) VALUES ('$senator','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$senator successfully added!');</script>";
			
			}
		
		}
	
	}
	
	if(isset($_POST["addGov"])){
	
		if($governor && $govDep){
		
			$governor = $_POST["governor"];
			$govDep = $_POST["govDep"];
		
		}else{

			if((empty($_POST["governor"])) && (empty($_POST["govDep"]))){
			
				$warning = "Please fill Governor and its Department before adding!";
				
				}

			}
		
			if(empty($_POST["governor"]) && (!empty($_POST["govDep"]))){
		
				$warning = "Please fill Governor before adding!";				
		
			}else{
			
			$governor = $_POST["governor"];
			
			}
				
			if(empty($_POST["govDep"]) && (!empty($_POST["governor"]))){
				
				$warning = "Please fill Governor's Department before adding!";
								
			}else{
			
			$govDep = $_POST["govDep"];
			
		
		}
		
		if($governor && $govDep){
		
			$electionName = $_GET['createElectionName'];
		
		
		if($governor && $govDep && $electionName){
		
		$checkgov = mysqli_query($connections, "SELECT * FROM tblgov WHERE governor ='$governor' ");
			$gov_row = mysqli_num_rows($checkgov);
		
			
		
		
		
		if($gov_row > 0){
			echo "<script>alert('Sorry, $governor already exists!');</script>";

			
			}else{
			
		
			mysqli_query($connections, "INSERT INTO tblgov (governor, govDepartment,electionName,electionYear) VALUES ('$governor','$govDep','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}


			echo"<script>alert('$governor $govDep successfully added!');</script>";
		
				}
			}		
		}
	
	}
	
	if(isset($_POST["addVGov"])){
	
		if($viceGovernor && $vGovDep){
		
			$viceGovernor = $_POST["viceGovernor"];
			$vGovDep = $_POST["vGovDep"];
		
		}else{

			if((empty($_POST["viceGovernor"])) && (empty($_POST["vGovDep"]))){
				$warning = "Please fill Vice Governor and its Department before adding!";

				}
				
			}
		
			if((empty($_POST["viceGovernor"])) && (!empty($_POST["vGovDep"]))){
		
				$warning = "Please fill Vice Governor before adding!";				
		
			}else{
			
			$viceGovernor = $_POST["viceGovernor"];
			
			}
				
			if((empty($_POST["vGovDep"])) && (!empty($_POST["viceGovernor"]))){
				
				$warning = "Please fill Vice Governor's Department before adding!";
								
			}else{
			
			$vGovDep = $_POST["vGovDep"];
			
			}
		
		if($viceGovernor && $vGovDep){
		
			$electionName = $_GET['createElectionName'];
		
		
		if($viceGovernor && $vGovDep && $electionName){
		
		$checkvgov = mysqli_query($connections, "SELECT * FROM tblvgov WHERE viceGovernor='$viceGovernor' ");
			$vgov_row = mysqli_num_rows($checkvgov);
		
			
		
		
		
		if($vgov_row > 0){
			echo "<script>alert('Sorry, $viceGovernor already exists!');</script>";

			
			}else{
			
			
		
			mysqli_query($connections, "INSERT INTO tblvgov (viceGovernor, viceGovDepartment,electionName,electionYear) VALUES ('$viceGovernor','$vGovDep','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$viceGovernor $vGovDep successfully added!');</script>";
		
				}
			}		
		}
		
	}
	
	
	if(isset($_POST["addBmem"])){
	
		if(empty($_POST["boardMember"])){
		
			$warning = "Please fill Board Member before adding!";
		
		}else{
		
			$electionName = $_GET['createElectionName'];
			$boardMember = $_POST["boardMember"];
		
		}
		
		if($boardMember && $electionName){
		
		$checkBmem = mysqli_query($connections, "SELECT * FROM tblboardmem WHERE boardMember='$boardMember' ");
			$bmem_row = mysqli_num_rows($checkBmem);
		
			
		
		
		
		if($bmem_row > 0){
			echo "<script>alert('Sorry, $boardMember already exists!');</script>";

			
			}else{
			
		
			mysqli_query($connections, "INSERT INTO tblboardmem (boardMember,electionName,electionYear) VALUES ('$boardMember','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$boardMember successfully added!');</script>";
		
			}
		}
	
	}
	
	if(isset($_POST["addCoun"])){
	
		if(empty($_POST["councilor"])){
		
			$warning = "Please fill Councilor before adding!";
		
		}else{
		
			$electionName = $_GET['createElectionName'];
			$councilor = $_POST["councilor"];
		
		}
		
		if($councilor && $electionName){
		
			$checkcoun = mysqli_query($connections, "SELECT * FROM tblcouncilor WHERE councilor='$councilor' ");
			$coun_row = mysqli_num_rows($checkcoun);
		
			
		
		
		
		if($coun_row > 0){
			echo "<script>alert('Sorry, $councilor already exists!');</script>";

			
			}else{
			
		
			mysqli_query($connections, "INSERT INTO tblcouncilor (councilor,electionName,electionYear) VALUES ('$councilor','$electionName','$electionYear')");
			$checkElectName = mysqli_query($connections, "SELECT * FROM tblelectname WHERE electionName='$electionName' ");
			$electName_row = mysqli_num_rows($checkElectName);
		
		
		if($electName_row > 0){

			
			}else{
			
			mysqli_query($connections, "INSERT INTO tblelectname (electionName,electionYear) VALUES ('$electionName','$electionYear')");

			}
			
			
			echo"<script>alert('$councilor successfully added!');</script>";
		
			}
		}
	
	}

?>


<h1 style="text-align:center; color:#fff;">New Election</h1>

	<span class="warn" id="warn"><h4><?php echo $warning; ?></h4></span>

<form method="POST">

	<center><input type="text" class="inTypes" name="electionName" value="<?php if(empty($_GET['createElectionName'])){ }else{ echo $_GET['createElectionName'];}  ?>" disabled placeholder="Election Name" style="font-weight:bold;"> <input type="text" class="inTypes" style="width:4%; font-weight:bold; text-align:center;" name="electionYear" disabled value="<?php echo $electionYear; ?>"></center>

	<table border="0" style="text-align:right; float:left;">
	
		<tr>
			<td style="color:#fff;"><b>President: </b><input type="text" class="inTypes" name="president" value="<?php echo $president; ?>" placeholder="President"></td><td class="leftTd"><input type="submit" class="addBtn" name="addPres" value="Add"></td>
		</tr>
		
		<tr></tr>
		<tr></tr>

		
		<tr>
			<td style="color:#fff;"><b>Vice President: </b><input type="text" class="inTypes" name="vicePresident" value="<?php echo $vicePresident; ?>" placeholder="Vice President"></td><td class="leftTd"><input type="submit" class="addBtn" name="addVpress" value="Add"></td>
		</tr>

		<tr></tr>
		<tr></tr>

		<tr>
			<td style="color:#fff;"><b>Secretary: </b><input type="text" class="inTypes" name="secretary" value="<?php echo $secretary; ?>" placeholder="Secretary"></td><td class="leftTd"><input type="submit" name="addSec" class="addBtn" value="Add"></td>
		</tr>

		<tr></tr>
		<tr></tr>
		
		<tr>
			<td style="color:#fff;"><b>Treasurer: </b><input type="text" class="inTypes" name="treasurer" value="<?php echo $treasurer; ?>" placeholder="Treasurer"></td><td class="leftTd"><input type="submit" name="addTreas" class="addBtn" value="Add"></td>
		</tr>
		
		<tr></tr>
		<tr></tr>
		
		<tr>
			<td style="color:#fff;"><b>Senator: </b><input type="text" class="inTypes" name="senator" value="<?php echo $senator; ?>" placeholder="Senator"></td><td class="leftTd"><input type="submit" name="addSen" class="addBtn" value="Add"></td>
		</tr>

		<tr></tr>
		<tr></tr>
		
		<tr>
			<td style="color:#fff;"><b>Governor: </b><input type="text" class="inTypes" name="governor" value="<?php echo $governor; ?>" placeholder="Governor"></td>
				<td>
					<select class="inBoxes" name="govDep">
						<option name="govDep" value="">Select Department</option>
						<option name="govDep" value="BASE" <?php if($govDep == "BASE") {echo "selected";} ?>>BASE</option>
						<option name="govDep" value="BEAD" <?php if($govDep == "BEAD") {echo "selected";} ?>>BEAD</option>
						<option name="govDep" value="CRIMSING" <?php if($govDep == "CRIMSING") {echo "selected";} ?>>CRIMSING</option>
						<option name="govDep" value="HMTM" <?php if($govDep == "HMTM") {echo "selected";} ?>>HMTM</option>
						<option name="govDep" value="ICS" <?php if($govDep == "ICS") {echo "selected";} ?>>ICS</option>
					</select>
				</td>
			<td><input type="submit" name="addGov" class="addBtn" value="Add"></td>
		</tr>

		<tr></tr>
		<tr></tr>
		
		<tr>
			<td style="color:#fff;"><b>Vice Governor: </b><input type="text" class="inTypes" name="viceGovernor" value="<?php echo $viceGovernor; ?>" placeholder="Vice Governor"></td>
				<td>
					<select class="inBoxes" name="vGovDep">
						<option name="vGovDep" value="">Select Department</option>
						<option name="vGovDep" value="BASE" <?php if($vGovDep == "BASE") {echo "selected";} ?>>BASE</option>
						<option name="vGovDep" value="BEAD" <?php if($vGovDep == "BEAD") {echo "selected";} ?>>BEAD</option>
						<option name="vGovDep" value="CRIMSING" <?php if($vGovDep == "CRIMSING") {echo "selected";} ?>>CRIMSING</option>
						<option name="vGovDep" value="HMTM" <?php if($vGovDep == "HMTM") {echo "selected";} ?>>HMTM</option>
						<option name="vGovDep" value="ICS" <?php if($vGovDep == "ICS") {echo "selected";} ?>>ICS</option>
					</select>
				</td>
			<td><input type="submit" class="addBtn" name="addVGov" value="Add"></td>
		</tr>

		<tr></tr>
		<tr></tr>
		
		<tr>
			<td style="color:#fff;"><b>Board Member: </b><input type="text" class="inTypes" name="boardMember" value="<?php echo $boardMember; ?>" placeholder="Board Member"></td><td class="leftTd"><input type="submit" class="addBtn" name="addBmem" value="Add"></td>
		</tr>

		<tr></tr>
		<tr></tr>
		
		<tr>
			<td style="color:#fff;"><b>Councilor: </b><input type="text" class="inTypes" name="councilor" value="<?php echo $councilor; ?>" placeholder="Councilor"></td><td class="leftTd"><input type="submit" name="addCoun" class="addBtn" value="Add"></td>
		</tr>
		
	</table>
	
	
	
	<div style="float:right; height:300px; overflow:hidden;">
	<?php
		include("frameNav.php");
	?>
	</div>



</form>
