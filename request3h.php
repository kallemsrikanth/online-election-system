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
		<a href="candidatehome.php"><li id="main">Home</li></a>
		<a href="request.php"><li id="main">Request As Candidate</li></a>
		<a href="candidateviewelection.php"><li id="main">View Elections</li></a>
		<a href="candidateresult.php"><li id="main">View Result</li></a>
		<a href="candidatehome.php"><li id="main">Contact</li></a>
		<a href="logout.php"><li id="main">Logout</li></a>
		<?php
		session_start();
		echo "<b>welcome candidate,".$_SESSION['cun']."</b>";
		?>
		</ul>
	</nav>
	
	
<aside>

</aside>
<section>
	<h2><b>Error while requesting! Please try again and make sure that all the details entered are correct</b></h2>
</section>
<footer>
</footer>
</div>
</body>
</html>