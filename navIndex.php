


<style>

html{
background-color:#fb5272;
font-family:sans-serif;
}

 .footer{
 width:100%
margin: -15px auto;
background-color:#ff1743;
color:#ffffff;
text-align:center;
}

.error{
color:#fff;
text-shadow:2px 0 1px red, -2px 0 1px red, 0 2px 1px red, 0 -2px 1px red;
font-weight:bold;
}


.heading{
color:#fff;
background:#ff1743;
text-align:center;
margin-top:-7px;
padding-bottom:5px;
font-size:3em;
font-family:Verdana;
box-shadow: 0 2px 8px black;
position:relative;
}

#nav{
box-shadow:0 1px 6px #000;
border:3px solid #fff;
width:30%;
padding:40px 0;
}

.updateBtn{
background:#1bbe1b;
color:#fff;
text-decoration:none;
padding:8px;
}

.updateBtn:hover{
background:#00ff00;
box-shadow:0 3px 8px #000;
}

.addBtn{
background:#1bbe1b;
text-decoration:none;
padding:3px 15px;
font-size:1em;
border:none;
color:#fff;
}

.addBtn:hover{
background:#00ff00;
box-shadow:0 3px 8px #000;
}

.deleteBtn{
background:#cc1616;
color:#fff;
text-decoration:none;
padding:8px;
}

.deleteBtn:hover{
background:#ff0000;
box-shadow:0 3px 8px #000;
}

.inBoxes{
padding:5px;
background:#ee2c51;
border:none;
color:#fff;
border-bottom:3px solid rgba(0,0,0, .3);
box-shadow:0 3px 5px #000;
}

.inTypes{
border:none;
border-bottom:3px solid rgba(0,0,0, .3);
padding:8px;
background:#faa0b1;
border-radius:10px;
color:#000;
}

.inTypes:focus{
box-shadow:0 3px 5px #000;
background:#fff;
}


.warn{
text-shadow:2px 0 1px red, -2px 0 1px red, 0 2px 1px red, 0 -2px 1px red;
text-align:center;
color:#fff;
}

</style>

<?php 

	session_start();
	
	include("connections.php");
	
		if(isset($_SESSION["userName"])){
	
		$userName = $_SESSION["userName"];
		$query_account_type = mysqli_query($connections, "SELECT * FROM tbluser WHERE firstName='$userName'");
		$get_account_type = mysqli_fetch_assoc($query_account_type);
		$account_type = $get_account_type["account_type"];
		
		if($account_type == 1){
		
			echo"<script>window.location.href='Admin';</script>";
		
		}else{
		
			echo "<script>window.location.href='Users';</script>";
		
		}
	
	}
	
		date_default_timezone_set ("Asia/Manila");
		$date_now = date("m/d/Y");
		$time_now = date("h:i a");
		$logErr = $attempt = $log_time = "";
		
		$end_time = date("h:i A", strtotime("+15 minutes", strtotime($time_now)));

		$userName = $password = "";
	
	if(isset($_POST["submit"])){
		
		
		
		if(empty($_POST["password"]) && empty($_POST["userName"]) ){
		
				$logErr = "User Name and Password are empty!";
		
		}else{
		
			if(empty($_POST["userName"])){
			
			$logErr = "Usern Name is empty!";
		
			}else{
		
			$userName = $_POST["userName"];
			
			}
			
			if(empty($_POST["password"])){
			
				$logErr = "Password is empty!";
			
			}else{
			
				$password = $_POST["password"];
			
		
		}
		
		}
		
		if($userName && $password){
		
			$checkUser = mysqli_query($connections, "SELECT * FROM tbluser WHERE firstName='$userName' ");
			$checkRow = mysqli_num_rows($checkUser);
			
			if($checkRow > 0){
			
				$fetch = mysqli_fetch_assoc($checkUser);
				//$db_firstName = $fetch["firstName"];
				$db_studentId = $fetch["studentId"];
				$db_attempt = $fetch["attempt"];
				$db_log_time = strtotime($fetch["log_time"]);
				$my_log_time = $fetch["log_time"];
				$new_time = strtotime($time_now);
				
				$account_type = $fetch["account_type"];
			
			if($account_type == "1"){
			
				
				if($db_studentId == $password){
					
						$_SESSION["userName"] = $userName;
						echo"<script>window.location.href='Admin';</script>";
					
					}else{
					
					$logErr = "Dear Admin, your Password is incorrect!";
					
					}

			
			}else{
			
					if($db_log_time <= $new_time){
						
							if($db_studentId == $password){
								
								$_SESSION["userName"] = $userName;
							
								mysqli_query($connections, "UPDATE tbluser SET attempt='', log_time='' WHERE firstName='$userName'");
								
								echo "<script>window.location.href='Users';</script>";
							
							}else{
							
								$attempt = $db_attempt + 1;
								
								if($attempt >= 3){
								
									$attempt = 3;
									
									mysqli_query($connections, "UPDATE tbluser SET attempt='$attempt', log_time='$end_time' WHERE firstName='$userName'");
									$logErr = "You already reached the three (3) times attempt to Log In. Please Log In after 15 minutes: <b>$end_time</b>";
									
								}else{
								
									mysqli_query($connections, "UPDATE tbluser SET attempt='$attempt' WHERE firstName='$userName'");
									$logErr = "Password is incorrect!";
									
									$logErr = "Login Attempt: <b>$attempt</b>";
								
								
								}
							
							}
						
						}else{
						
							$logErr = "I'm Sorry, You have to wait until: <b>$my_log_time</b> before logging in.";
						
						}
			
			}
			
			}else{
			
				$logErr = "Sorry, the User Name you entered is not registered.";
			
			}
		
		}
		
		
	}
	
	
?>

<h1 class="heading">e-Voting System</h1>

<h1 style="text-align:center;color:#fff;">Log In</h1>

<span class="warn"><h3><?php echo $logErr; ?></h3></span>

<br/>
<center>
	<div id="nav">
			
			<form method="POST">
		<table border="0" width="60%">
			
			<tr>
				<td><input type="text" name="userName" value="<?php echo $userName; ?>" placeholder="User Name" class="inTypes"></td>
			</tr>
		
			<tr>
				<td><input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password" class="inTypes"></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" value="LogIn" class="inBoxes" style="width:30%;">&nbsp;&nbsp;&nbsp;<a href="#">Forgot Password?</a></td>
			</tr>
			
		</table>

			</form>
	</div>
</center>



















