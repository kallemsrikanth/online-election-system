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
table,th,td
{
	border:2px solid black;
	border-collapse:collapse;
}
td
{
	padding:20px;
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
		echo "<b>welcome admin,".$_SESSION['auname']."</b>";
		?>
		</ul>
	</nav>
	
<aside>
	<h2>Admin's Profile</h2>
	<ul id="ul">
		<a href="retrieverequest.php"><li id="main1"><b>Candidate Requests</b></li></a>
		<a href="deletecandidate.php"><li id="main1"><b>Delete Candidate</b></li></a>
		<a href="adminlgn.html"><li id="main1"><b>Results</b></li></a>
		<a href="adminlgno.php"><li id="main1"><b>Logout</b></li></a>
		
	</ul>
</aside>
<aside id="aside2">

</aside>
<section>
<form id="form1" method="POST" action="deletecandidate2.php" >
<table border="0" width="100%" />
	
	
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
	

	
<?php
require_once("DBConn.php");

$c=$_POST['candidates'];

$sql=mysqli_query($conn,"select * from election2 where eid='".$c."'");
$sql1=mysqli_query($conn,"select constiuency from election where eid='".$c."'");
$res=mysqli_fetch_assoc($sql1);
$constiuency=$res['constiuency'];
/*while($row=mysqli_fetch_assoc($sql))
{
	echo "<br>";
	$name=$row['cname'];
	$desc=$row['description'];
	$img=$row['image'];
	$party=$row['party'];
	
	echo "<b>Candidate Id:</b>".$cid."<br><b>Candidate Name:</b>".$name."<br><b>Candidate Description:</b>".$desc."<br><b>Party Name:</b>".$party."<br><b>Constiuency:</b>".$constiuency."<br>";
	//header("content-type:image/jpeg");
	echo $img;
	echo "<br><br><br>";
}*/
while($row=mysqli_fetch_assoc($sql)){
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
			 $cid=$row['cid'];
	echo "<tr><td><b>" . $row['cid'] . "</td><td><b>" . $row['cname'] . "</td><td><b>" . $row['description'] . "</td><td><b>" . $row['party'] . "</td><td><b>" . $constiuency . "</td><td>" . "<img src='",$row['image'],"' width='75' height='75' />" . "</td></tr>";  //$row['index'] the index here is a field name
echo "</table><br>";
echo"<button> <a href='deletecandidate2.php?id=".$cid."' type='submit' style='color:black;'>Delete</a></button>&nbsp";
}
?>
</form>
</section>
<footer>
</footer>
</div>
</body>
</html>