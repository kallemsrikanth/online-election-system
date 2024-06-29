
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
		</ul>
	</nav>
<aside>
</aside>
	
<aside id="aside2">	
</aside>

<section>

<form id="form1" method="POST" action="candidateviewelection1.php" >
<h1>View election</h1>
	<table border="0" width="100%" />
	<tr><td width="20%" /><b>Select the election to view candidates</td><td>

	<?php
	require_once("DBConn.php"); 
	$sql=mysqli_query($conn,"select * from election");
	echo "<select name=\"candidates\">\m";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo "<option value=".$row['eid'].">".$row['ename']."</option>\n";
	}
	echo "</select>\n";
	?>
	
	</table>
	<button type="submit"  value="View" style="-webkit-border-radius:10px; height:30px; width:100px;">View</button><br />
</section>

	


<footer>
	<p id="heading3">&copy  SM.</p>
</footer>
</div>
</body>
</html>