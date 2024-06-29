<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Online Polling System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
table,th,td
{
	border:2px solid black;
	border-collapse:collapse;
}
td
{
	padding:20px;
}
select
{
	border:1px solid black;
	background-color:powderblue;
	padding:5px;
	width:30%;
	margin-bottom:10px;
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
<h1>View election</h1>
<form id="form1" method="POST" action="viewelection1.php" >
<?php
	require_once("DBConn.php"); 
	$sql=mysqli_query($conn,"select * from election");
	echo "<select name=\"candidates\">\m";
	while($row=mysqli_fetch_assoc($sql))
	{
		echo "<option value=".$row['eid'].">".$row['ename']."</option>\n";
	}
	echo "</select>";
	echo "<br>";
?>
<?php
ini_set('display_errors',0);
require_once("DBConn.php");
$c=$_POST['candidates'];
if($c==null){
	echo "<b>No Election to display<br />";
	echo "<br>";
}
else{
$sql=mysqli_query($conn,"select * from election2 where eid='".$c."'");
$sql1=mysqli_query($conn,"select constiuency from election where eid='".$c."'");
$res=mysqli_fetch_assoc($sql1);
$constiuency=$res['constiuency'];
echo "<table width=100%>"; // start a table tag in the HTML
   //Creates a loop to loop through results
	echo "<tr>
			<th>Candidate ID</th>
				<th>Candidate Name</th>
				<th>Candidate Description</th>
				<th>Party Name</th>
				<th>Constituency</th>
				<th>Image</th>
			</tr>";
while($row=mysqli_fetch_assoc($sql)){
	echo "<tr><td><b>" . $row['cid'] . "</td><td><b>" . $row['cname'] . "</td><td><b>" . $row['description'] . "</td><td><b>" . $row['party'] . "</td><td><b>" . $constiuency . "</td><td>" . "<img src='",$row['image'],"' width='75' height='75' />" . "</td></tr>";  //$row['index'] the index here is a field name
}
echo "</table>";
}
?>
	<button type="submit"  value="View" style="-webkit-border-radius:10px; height:30px; width:100px;">View</button><br />
</section>

	


<footer>
	<p id="heading3">&copy  SM.</p>
</footer>
</div>
</body>
</html>