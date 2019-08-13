<style>

.tdTop{
color:#fff;
padding-bottom:7px;
background:#ff1743;
padding-top:10px;
text-align:center;
width:40%;
}

.a:hover{
background-color:skyblue;
}

tr:nth-child(odd){
background:#fbbdc9;

}


tr:nth-child(even){
background:#fa8da2;

}

.a{
text-decoration:none;
color:#000;
display:block;
padding:15px;
}

</style>


<center>

<table border="0" style="background:#fff; ">

<tr>
<td class="tdTop"><b>Select Election Name</b></td>
</tr>

<?php

	include("../connections.php");
	
	$retrieveElectName = mysqli_query($connections, "SELECT * FROM tblelectname");
	
	while($rowElctName = mysqli_fetch_assoc($retrieveElectName)){
	
	$db_electName = $rowElctName["electionName"];
	$get_RecordCandidate = md5(rand(1,9));
	$get_UpdateCandidate = md5(rand(1,9));
	$get_DeleteCandidate = md5(rand(1,9));
	$getScript = md5(rand(1,9));
	$rand = md5(rand(1,5));
	
	echo "
	
	<tr>
		<td><center><a href='?ReadingElectionName=$db_electName&&calculating=$rand&&ver=$getScript&&get_RecordCandidate=$get_RecordCandidate' class='a'>$db_electName</a></center></td>
		
	</tr>
	
	";
	
	}

?>


</table>
</center>



