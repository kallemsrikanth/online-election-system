<?php
require_once("DBConn.php");
session_start();
$cid=$_POST['cid'];
$cpass=$_POST['cpass'];
if($cid!="" && $cpass!="")
{
	$sql=mysqli_query($conn,"select * from candidate where cid='".$cid."' and cpass='".$cpass."'") or die(mysql_error());
	$res=mysqli_num_rows($sql);
	$n=mysqli_query($conn,"select * from candidate where cid='".$cid."'");
	$row=mysqli_fetch_assoc($n);
	$cuname=$row['cuname'];
	$cpname=$row['cpname'];
	if($res>0)
	{
		$_SESSION['cun']=$cuname;
		$_SESSION['cid']=$cid;
		$_SESSION['cpname']=$cpname;
		echo "logged in successfully";
		header("location:candidatehome.php");
	}
	else
	{
		echo "log in failed";
	header("location:candidatelgnh.php");
	}
}
?>