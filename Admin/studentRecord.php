<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
<link rel="icon" type="image/png" href="Jh.jpg">
<title>Title Here</title>

</head>

<body>
<?php

	session_start();
	
	include("../connections.php");
	include("nav.php");
	
		echo "
	<script>
		document.getElementById('five').className = 'active';
	</script>
	";
	
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

	<script src="js/jQuery.js"></script>
	
<script>

	setInterval(function(){
	
		$('#retriever').load('retriever.php');
	
	
	}, 1000);

</script>


<?php

		if(empty($_GET["get_Delete"])){
	
	
	}else{
	
		include("deleteStudentRecord.php");
	
	}



		if(empty($_GET["get_Update"])){

?>


<div id="retriever">

<?php	include("retriever.php"); ?>

</div>

<?php

		}else{

		include("updateStudentRecord.php");

	}
	
?>



<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<footer>
 <hr>
<div class="footer">
<h4> &copy 2017 by John Humbert</h4>
</div> 
</footer>
</body>
</html> 
