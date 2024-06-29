<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Online Polling System</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<style>
#ul
{
	border:1px solid black;
	width:162px;
	height:700px;
	list-style-type:none;
	margin-top:30px;
	background-color:#f1f1f1;
}
#main1
{
	border-bottom: 2px solid white;
}
#main1
{
	margin-left:-40px;
	color:grey;
	width:202px;
	height:40px;
	text-align:center;
	-webkit-transition: -webkit-transform 1s, background 1s, width 1s, height 1s, opacity 1s;
	background-color:powderblue;
}
#main1:hover
{	
	opacity:1;
	text-align:center;
	background-color:black;
}
h2
{
	text-align:center;
	margin-top:80px;
}
</style>
<div id="wrapper">
<header>
	<img src="projectposter1.png" />
</header>	
	<nav>
		<ul>
		<a href="voterhome.php"><li id="main">Home</li></a>
		<a href="voterhome.php"><li id="main">Vote</li></a>
		<a href="editprofile.php"><li id="main">Edit Profile</li></a>
		<a href="voterresult.php"><li id="main">View Result</li></a>
		<a href="voterhome.php"><li id="main">Contact</li></a>
		<a href="logout.php"><li id="main">Logout</li></a>
		</ul>
	</nav>
	<h2>Edit Profile</h2>;
	
<aside id="aside2">

</aside>
<section>
	<?php
	require_once("DBConn.php");
	session_start();
	$sql=mysqli_query($conn,"select * from user_reg where name='".$_SESSION['un']."'");
	$sql1=mysqli_query($conn,"select constiuency from verify_signup where id='".$_SESSION['id']."'");
		$row=mysqli_fetch_assoc($sql);
		$row1=mysqli_fetch_assoc($sql1);
		echo"<form id='form1' method='POST' action='editprofileupdate.php' style = 'margin-top:700px;' >";
		echo"<table border='0' width='100%' />";
		
		echo "<tr><td width='20%' /><b>Voter id:</td><td><input type=text name='id' value='".$row['id']."' style='width:300px; height:20px; -webkit-border-radius:5px;' autocomplete='off' required readonly/></td><br>";
		
		echo "<tr><td width='20%' /><b>Constiuency:</td><td><input type=text name='email' value='".$row1['constiuency']."' style='width:300px; height:20px; -webkit-border-radius:5px;' autocomplete='off' required readonly/></td><br>";
			
		echo "<tr><td width='20%' /><b>Name:</td><td><input type=text name='name' value='".$row['name']."' style='width:300px; height:20px; -webkit-border-radius:5px;' autocomplete='off' required/></td><br>";
		
		echo "<tr><td width='20%' /><b>Password:</td><td><input type=text name='pass' value='".$row['pass']."' style='width:300px; height:20px; -webkit-border-radius:5px;' autocomplete='off' required/></td><br>";
		
		echo "<tr><td width='20%' /><b>Mobile:</td><td><input type=text name='mobile' value='".$row['mobile']."' style='width:300px; height:20px; -webkit-border-radius:5px;' autocomplete='off' required/></td><br>";
		
		echo "<tr><td width='20%' /><b>Email:</td><td><input type=text name='email' value='".$row['email']."' style='width:300px; height:20px; -webkit-border-radius:5px;' autocomplete='off' required/></td><br>";
		echo"</table>";
		echo "<button type='submit' value='Update' style='-webkit-border-radius:10px; height:30px; width:100px;'>Update</button><br />";
		echo "</form>";
	?>

</section>
<footer>

</footer>
</div>
</body>
</html>