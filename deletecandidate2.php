<?php
require_once("DBConn.php");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql2=mysqli_query($conn,"select * from election2 where cid='".$id."'");
	$row=mysqli_fetch_assoc($sql2);
	$eid=$row['eid'];
	$sql=mysqli_query($conn,"delete from election2 where cid='".$id."'");
	
	$sql1=mysqli_query($conn,"select noc from election where eid='".$eid."'");
	$row1=mysqli_fetch_assoc($sql1);
	$noc=$row1['noc'];
	echo $noc;
	$noc=$noc-1;
	$sql2=mysqli_query($conn,"update election set noc='".$noc."' where eid='".$eid."'");
	header("location:deletecandidate.php");
}
else
{
	header("location:deletecandidate.php");
}
?>