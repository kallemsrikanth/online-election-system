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
		<a href="adminhome.php"><li id="main">Home</li></a>
		<a href="newelection1.php"><li id="main">New Election</li></a>
		<a href="viewelection.php"><li id="main">View Election</li></a>
		<a href="endelection.php"><li id="main">End Election</li></a>
		<a href="adminresult.php"><li id="main">View Result</li></a>
		<a href="adminhome.php"><li id="main">Contact</li></a>
		<a href="logout.php"><li id="main">Logout</li></a>
		<?php
		session_start();
		echo "<li color=red>"."<b>welcome admin,".$_SESSION['auname']."</b>";
		?>
		</ul>
	</nav>
	
<aside>
	<h2>Admin's Profile</h2>
	<ul id="ul">
		<a href="retrieverequest.php"><li id="main1"><b>Candidate Requests</b></li></a>
		<a href="deletecandidate.php"><li id="main1"><b>Delete Candidate</b></li></a>
		<a href="voterlgn.html"><li id="main1"><b>Edit Candidate</b></li></a>
		<a href="adminlgn.html"><li id="main1"><b>Results</b></li></a>
		<a href="adminlgno.php"><li id="main1"><b>Logout</b></li></a>
		
	</ul>
</aside>
<aside id="aside2">

</aside>
<section>

</section>
<footer>
	<p id="heading3">&copy  SM.</p>
</footer>
</div>
</body>
</html>