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
select
{
	border:1px solid black;
	background-color:powderblue;
	padding:5px;
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
		</ul>
	</nav>
<aside>
</aside>
	
<aside id="aside2">	
</aside>

<section>

<form id="form1" method="POST" action="newelection.php" >
<h1>New election</h1>
	<table border="0" width="100%" />
	<tr><td width="20%" /><b>Election Id</td><td><input name="eid" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required autofocus/></td><br />
	<tr><td width="20%" /><b>Election Name</td><td><input name="en" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<!-- <tr><td width="20%" /><b>Number of Candidates</td><td><input name="noc" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br /> -->
	<tr><td width="20%" /><b>Select the Constituency:<b></td>
	<td><?php
	require_once("DBConn.php"); 
	$sql=mysqli_query($conn,"select Distinct constiuency from verify_signup");
	echo "<select name=constiuency>";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo "<option value=".$row['constiuency'].">".$row['constiuency']."</option>\n";
	}
	echo "</select>\n";
	?>
	</td></tr>
	
	</table><br />
	<button type="submit"  value="Start Election" style="-webkit-border-radius:10px; height:30px; width:100px;">Start Election</button><br />
</section>

	


<footer>
	<p id="heading3">&copy  SM.</p>
</footer>
</div>
</body>
</html>