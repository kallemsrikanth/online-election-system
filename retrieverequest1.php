<?php
require_once("DBConn.php");

	if(isset($_GET["id"]))
	{
		$cid=$_GET["id"];
	$query=mysqli_query($conn,"select * from candidate_request where cid='".$cid."'");
	$row=mysqli_fetch_assoc($query);
	
	$sql=mysqli_query($conn,"insert into election2(eid,cid,cname,description,party) values('".$row['eid']."','".$row['cid']."','".$row['cname']."','".$row['description']."','".$row['party']."')");
	$sql2=mysqli_query($conn,"select * from election where eid='".$row['eid']."'");
	$row1=mysqli_fetch_assoc($sql2);
	$sql1=mysqli_query($conn,"delete from candidate_request where cid='".$row['cid']."'");
	
	$noc=$row1['noc'];
	$noc=$noc+1;
	$sql3=mysqli_query($conn,"update election set noc='".$noc."' where eid='".$row['eid']."'");
	header("location:retrieverequest.php");
	}


?>