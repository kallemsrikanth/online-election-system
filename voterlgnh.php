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
		<li id="main"><a href="test.html">Home</a></li> 
		<li id="main"><a href="">Registration &#9662;</a>
			<ul class="dropdown">
                <li><a href="candidateregister.php">Candidate</a></li>
                <li><a href="register.html">Voter</a></li>
            </ul>
		</li>
		<li id="main"><a href="voterlgn.html">Voter Login</a></li>
		<li id="main"><a href="adminlgn.html">Admin Login</a></li>
		<li id="main"><a href="candidatelgn.html">Candidate Login</a></li>
		<li id="main"><a href="contact-us.html">Contact</a></li> 
		</ul>
	</nav>
<aside>
	
</aside>
<aside id="aside2">

</aside>
<section>
<h1>Voter Login</h1>
<form id="form1" method="post" action="voter_login.php" >
	<table border="0" width="100%" />
	<tr><td width="20%" /><b>Aadhar Uid</td><td><input name="uid" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Voter Id</td><td><input name="id" type="password" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Password</td><td><input name="pwd" type="password" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
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