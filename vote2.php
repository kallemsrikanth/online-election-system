<?php
require_once("DBConn.php");

session_start();

	$query=mysqli_query($conn,"select * from vote where id='".$_SESSION['id']."' and eid='".$_SESSION['eid']."'");
	
	if(mysqli_num_rows($query)>=1)
	{
		header("location:vote3.php");
	}
	else
	{
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql=mysqli_query($conn,"select * from election2 where cid='".$id."'");
		$row=mysqli_fetch_assoc($sql);
		$count=$row['vcount'];
		$cname=$row['cname'];
	
		$count=$count+1;
		$sql1=mysqli_query($conn,"update election2 set vcount='".$count."' where cid='".$id."'");
		$sql2=mysqli_query($conn,"insert into vote(id,eid,cname) values('".$_SESSION['id']."','".$_SESSION['eid']."','".$cname."')");
		header("location:vote4.php");
	}
	}