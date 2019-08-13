

<?php 

	include("../connections.php");

?>

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

.nav{
background:#ff1743;
color:#fff;
padding:10px;
text-decoration:none;
//display:block;
//width:20%;
}

.nav:hover{
box-shadow:0 3px 8px #000;
background:#ff0030;
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

#waGamit{
box-shadow:none;
}

#nav{
width:100%;
}

#dept{
position:absolute;
top:57.6%;
left:34.4%;
}


.catch{
position:absolute;
}

.leftTd{
text-align:left;
}

.frame{
position:absolute;
top:45%;
right:3px;
}

.frameNaving{
position:absolute;
top:40%;
right:3px;
}


.newElecTabs{
text-decoration:none;
padding:5px;
background:#af4600;
color:#fff;
}

.newElecTabs:hover{
background:#ff6600;
box-shadow:0 3px 8px #000;
}

.warn{
text-shadow:2px 0 1px red, -2px 0 1px red, 0 2px 1px red, 0 -2px 1px red;
padding:0 10px;
position:absolute;
color:#fff;
top:23%;
left:3%;
}

.active{
box-shadow:0 3px 8px #000;
text-decoration:none;
background:#ff0030;
padding:10px;
color:#fff;
}

</style>


<h1 class="heading">e-Voting System</h1>

<center>
	<div id="nav">
<a href="newElect" class="nav" id="one">New Election</a>

<a href="register" class="nav" id="two">Register New Voter</a>

<a href="currentElection" class="nav" id="three">Current Election</a>

<a href="previousElection" class="nav" id="four">Previous Election</a>

<a href="studentRecord" class="nav" id="five">Student Records</a>

<a href="candidateRecord" class="nav" id="six">Candidate Records</a>

<a href="../logout" class="nav">Log Out</a>

	</div>
</center>



















