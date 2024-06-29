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
		<a href="candidatehome.php"><li id="main"><b>Home</b></li></a>
		<a href="request.php"><li id="main"><b>Request As Candidate</b></li></a>
		<a href="candidateviewelection.php"><li id="main"><b>View Elections </b></li></a>
		<a href="candidateresult.php"><li id="main"><b>View Result</b></li></a>
		<a href="candidatehome.php"><li id="main"><b>Contact</b></li></a>
		<a href="logout.php"><li id="main"><b>Logout</b></li></a>
		<?php
		session_start();
		echo "<b>welcome candidate,".$_SESSION['cun']."</b>";
		?>
		</ul>
	</nav>
	
	
<aside id="aside2">

</aside>

	<?php
	require_once("DBConn.php"); 
	
	$desc=$_POST['d'];
	$_SESSION['desc']=$desc;
	$sql1=mysqli_query($conn,"select * from candidate where cid='".$_SESSION['cid']."'");
	$res=mysqli_fetch_assoc($sql1);
	$cimage = $res['image'];
	//$image=$image;
	$image = addslashes(file_get_contents($_FILES['$cimage']['tmp_name']));
	$sql=mysqli_query($conn,"insert into candidate_request(eid,cid,cname,description,party,image) values('".$_SESSION['eid']."','".$_SESSION['cid']."','".$_SESSION['cun']."','".$_SESSION['desc']."','".$_SESSION['cpname']."','".$image."')");
	if($sql)
	{
		//echo $image;
		header("location:request3r.php");
	}
	else
	{
		//echo $image;
		header("location:request3h.php");
	}
	?>

<section>

</section>
<footer>
	<p id="heading3">&copy  SM.</p>
</footer>
</div>
</body>
</html>