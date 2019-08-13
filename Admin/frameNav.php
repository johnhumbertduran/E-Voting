<?php


	include("../connections.php");
	include("navSaFrame.php")
	
	
	
	
// color green 05c205
?>
<style>

.tabtabs{
background:#fff;
}

.newElecTabs:hover{
background:#ff6600;
box-shadow:0 3px 8px #000;
}

.change{
background-color:#ff1743;
padding-bottom:7px;
padding-top:10px;
color:#fff;
}


.luhhTr:nth-child(odd){
background-color:#3ffc3f;
}


.luhhTr:nth-child(even){
background-color:#93fb93;
}


</style>

	
	<div class="frameNaving">
	
		<a href="#1" class="newElecTabs" id="11" onclick="pres1()">President</a>
		<a href="#2" class="newElecTabs" id="12" onclick="pres2()">Vice President</a>
		<a href="#3" class="newElecTabs" id="13" onclick="pres3()">Secretary</a>
		<a href="#4" class="newElecTabs" id="14" onclick="pres4()">Treasurer</a>
		<a href="#5" class="newElecTabs" id="15" onclick="pres5()">Senator</a>
		<a href="#6" class="newElecTabs" id="16" onclick="pres6()">Governor</a>
		<a href="#7" class="newElecTabs" id="17" onclick="pres7()">Vice Governor</a>
		<a href="#8" class="newElecTabs" id="18" onclick="pres8()">Board Member</a>
		<a href="#9" class="newElecTabs" id="19" onclick="pres9()">Councilor</a>
		
	</div>

	
	<div class="frame" style="width:48%; height:300px;  overflow:auto; text-align:center;"><!--border-top:5px solid gold; border-bottom:5px solid gold;!-->



	
		<table border="1" width="630px" id="1" class="tabtabs">
	<tr>
		<td  class="tdTop" id="pres">President</td><td  class="tdTop" id="pres1">Election Name</td>
	</tr> 
		
		<?php 
		
			$retrievePres = mysqli_query($connections, "SELECT * FROM  tblpres WHERE electionName='$electionName' ");
			while($rowPres = mysqli_fetch_assoc($retrievePres)){
			
				$db_pres = $rowPres["president"];
				$db_electName = $rowPres["electionName"];
			
				echo "
				
				<tr class='myTr'>
					<td><center>$db_pres</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			} 
		
		?>
	
		</table>



		<table border="1" width="630px" id="2" class="tabtabs">
	<tr>
		<td  class="tdTop" id="vpres">Vice President</td><td  class="tdTop" id="vpres1">Election Name</td>
	</tr>
	
	<?php
		
			$retrievePres = mysqli_query($connections, "SELECT * FROM  tblvpres WHERE electionName='$electionName' ");
			while($rowPres = mysqli_fetch_assoc($retrievePres)){
			
				$db_vpres = $rowPres["vicePresident"];
				$db_electName = $rowPres["electionName"];
			
				echo "
				
				<tr class='myTr'>
					<td><center>$db_vpres</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		</table >



		<table border="1" width="630px" id="3" class="tabtabs">
	<tr>
		<td  class="tdTop" id="sec">Secretary</td><td  class="tdTop" id="sec1">Election Name</td>
	</tr>
	
	<?php
		
			$retrieveSec = mysqli_query($connections, "SELECT * FROM  tblsecretary WHERE electionName='$electionName' ");
			while($rowSec = mysqli_fetch_assoc($retrieveSec)){
			
				$db_sec = $rowSec["secretary"];
				$db_electName = $rowSec["electionName"];
			
				echo "
				
				<tr class='myTr tb3'>
					<td><center>$db_sec</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		</table>

		

		<table border="1" width="630px" id="4" class="tabtabs">
	<tr>
		<td  class="tdTop" id="treas">Treasurer</td><td  class="tdTop" id="treas1">Election Name</td>
	</tr>
		
		<?php
		
			$retrieveTreas = mysqli_query($connections, "SELECT * FROM  tbltreasurer WHERE electionName='$electionName' ");
			while($rowTreas = mysqli_fetch_assoc($retrieveTreas)){
			
				$db_treas = $rowTreas["treasurer"];
				$db_electName = $rowTreas["electionName"];
			
				echo "
				
				<tr class='myTr tb4'>
					<td><center>$db_treas</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		
		</table>


		<table border="1" width="630px" id="5" class="tabtabs">
	<tr>
		<td  class="tdTop" id="sen">Senator</td><td  class="tdTop" id="sen1">Election Name</td>
	</tr>
	<?php
		
			$retrieveSen = mysqli_query($connections, "SELECT * FROM  tblsenator WHERE electionName='$electionName' ");
			while($rowSen = mysqli_fetch_assoc($retrieveSen)){
			
				$db_sen = $rowSen["senator"];
				$db_electName = $rowSen["electionName"];
			
				echo "
				
				<tr class='myTr tb5'>
					<td><center>$db_sen</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		
		</table>



		<table border="1" width="630px" id="6" class="tabtabs">
	<tr>
		<td  class="tdTop" id="gov">Governor</td><td  class="tdTop" id="gov1">Department</td><td  class="tdTop" id="gov2">Election Name</td>
	</tr>
	
		<?php
		
			$retrieveGov = mysqli_query($connections, "SELECT * FROM  tblgov WHERE electionName='$electionName' ");
			while($rowGov = mysqli_fetch_assoc($retrieveGov)){
			
				$db_gov = $rowGov["governor"];
				$db_govDep = $rowGov["govDepartment"];
				$db_electName = $rowGov["electionName"];
			
				echo "
				
				<tr class='myTr tb6'>
					<td><center>$db_gov</center></td>
					<td><center>$db_govDep</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		
		</table>


		
		

		<table border="1" width="630px" id="7" class="tabtabs">
	<tr>
		<td  class="tdTop" id="vgov">Vice Governor</td><td  class="tdTop" id="vgov1">Department</td><td  class="tdTop" id="vgov2">Election Name</td>
	</tr>
	
	<?php
		
			$retrieveVGov = mysqli_query($connections, "SELECT * FROM  tblvgov WHERE electionName='$electionName' ");
			while($rowVGov = mysqli_fetch_assoc($retrieveVGov)){
			
				$db_vgov = $rowVGov["viceGovernor"];
				$db_vgovDep = $rowVGov["viceGovDepartment"];
				$db_electName = $rowVGov["electionName"];
			
				echo "
				
				<tr class='myTr tb7'>
					<td><center>$db_vgov</center></td>
					<td><center>$db_vgovDep</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		
		</table>



		<table border="1" width="630px" id="8" class="tabtabs">
	<tr>
		<td  class="tdTop" id="bmem">Board Member</td><td  class="tdTop" id="bmem1">Election Name</td>
	</tr>
	
	<?php
		
			$retrieveBMem = mysqli_query($connections, "SELECT * FROM  tblboardmem WHERE electionName='$electionName' ");
			while($rowBM = mysqli_fetch_assoc($retrieveBMem)){
			
				$db_bm = $rowBM["boardMember"];
				$db_electName = $rowBM["electionName"];
			
				echo "
				
				<tr class='myTr tb8'>
					<td><center>$db_bm</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		
		</table>


		
		

		<table border="1" width="630px" id="9" class="tabtabs">
	<tr>
		<td  class="tdTop" id="coun">Councilor</td><td  class="tdTop" id="coun1">Election Name</td>
	</tr>
	
	<?php
		
			$retrieveCoun = mysqli_query($connections, "SELECT * FROM  tblcouncilor WHERE electionName='$electionName' ");
			while($rowCoun = mysqli_fetch_assoc($retrieveCoun)){
			
				$db_coun = $rowCoun["councilor"];
				$db_electName = $rowCoun["electionName"];
			
				echo "
				
				<tr class='myTr tb9'>
					<td><center>$db_coun</center></td>
					<td><center>$db_electName</center></td>
				</tr>
				
				";
			
			}
		
		?>
		
		</table>


	</div>
