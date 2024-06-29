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
a:link
{
	color:black;
	text-decoration:none;
}
a:visited
{
	color:black;
	text-decoration:none;
}
a:active
{
	color:black;
	text-decoration:none;
}
a:hover
{	
	color:grey;
	text-decoration:none;
}
h1
{
		text-align:left;
		padding-top:30px;
		padding-left:35px;
}
</style>
<div id="wrapper">
<header>
	<img src="projectposter1.png" />
</header>	
	<nav>
		<ul>
		<a href="adminhome.php"><li id="main"><b>Home</b></li></a>
		<a href="newelection1.php"><li id="main"><b>New Election</b></li></a>
		<a href="viewelection.php"><li id="main"><b>View Election</b></li></a>
		<a href="endelection.php"><li id="main"><b>End Election</b></li></a>
		<a href="adminresult.php.html"><li id="main"><b>View Result</b></li></a>
		<a href="adminlgn.html"><li id="main"><b>Contact</b></li></a>
		<a href="logout.php"><li id="main"><b>Logout</b></li></a>
		</ul>
	</nav>
<aside>
	
</aside>
<aside id="aside2">

</aside>
<section>
<h1>Admin Login</h1>
<form id="form1" method="POST" action="adminlgn.php" >
	<table border="0" width="100%" />
	<tr><td width="20%" /><b>Name</td><td><input name="auname" type="text" style="width:300px; height:20px; -webkit-border-radius:10px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Password</td><td><input name="apwd" type="password" style="width:300px; height:20px; -webkit-border-radius:10px;" autocomplete="off" required/></td><br />
	</table>
	<?php 
	session_start();
	if(empty($_SESSION['username'])) {
		echo "<b>'Incorrect username/password'</b>";
	}
	else{
		header('location:adminlgn.php');
	}
	?><br />
	<button type="submit"  value="Register" style="-webkit-border-radius:10px; height:30px; width:100px;">Login</button><br />
</section>
<footer>
<p id="heading3">&copy  SM.</p>
</footer>
</div>
</body>
</html>