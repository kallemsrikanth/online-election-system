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
		<a href="vote.php"><li id="main">Vote</li></a>
		<a href="editprofile.php"><li id="main">Edit Profile</li></a>
		<a href="voterresult.php"><li id="main">View Result</li></a>
		<a href="voterhome.php"><li id="main">Contact</li></a>
		<a href="logout.php"><li id="main">Logout</li></a>
		</ul>
	</nav>
	
	
<aside id="aside2">

</aside>
<section>
<form id="form1" method="POST" action="voterresult1.php" style = "margin-top: 720px;">
<h1>View election</h1>
	<table border="0" width="100%" />
	
	
	<?php
	require_once("DBConn.php"); 
	$sql=mysqli_query($conn,"select * from endelection1");
	echo "<select name=\"candidates\">\m";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo "<option value=".$row['eid'].">".$row['ename']."</option>\n";
	}
	echo "</select>\n";
	?>
	

	
<?php
require_once("DBConn.php");

$c=$_POST['candidates'];

$sql=mysqli_query($conn,"select * from endelection where eid='".$c."'");
$sql1=mysqli_query($conn,"select constiuency from endelection1 where eid='".$c."'");
$res=mysqli_fetch_assoc($sql1);
$constiuency=$res['constiuency'];
echo "<table width=100% border=5>"; // start a table tag in the HTML
   //Creates a loop to loop through results
	echo "<tr>
			<th>Candidate ID</th>
				<th>Candidate Name</th>
				<th>Candidate Description</th>
				<th>Party Name</th>
				<th>Constituency</th>
				<th>Vcount</th>
			</tr>";
while($row=mysqli_fetch_assoc($sql))
{
	echo "<br>";
	$cid=$row['cid'];
	$name=$row['cname'];
	$desc=$row['description'];
	//$img=$row['image'];
	$party=$row['party'];
	$vcount=$row['vcount'];
	//echo "<b>Candidate Id:</b>".$cid."<br><b>Candidate Name:</b>".$name."<br><b>Candidate Description:</b>".$desc."<br><b>Party Name:</b>".$party."<br><b>Constiuency:</b>".$constiuency."<br>";
	//header("content-type:image/jpeg");
	echo "<tr><td><b>" . $cid . "</td><td><b>" . $name . "</td><td><b>" . $desc . "</td><td><b>" . $party . "</td><td><b>" . $constiuency . "</td><td>" . $vcount . "</td></tr>";
	//echo "<b>Number Of Votes:</b>".$vcount."<br>";
	//echo $img;
	//echo "<br><br><br>";
	
}
echo "</table>";
?>
</table>

	<button type="submit"  value="View" style="-webkit-border-radius:10px; height:30px; width:100px;">View Result</button><br />
</section>
<footer>
</footer>
</div>
</body>
</html>