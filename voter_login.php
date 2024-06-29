<?php
require_once("DBConn.php"); 
session_start();
$uid=$_POST['uid'];
$id=$_POST['id'];
$pwd=$_POST['pwd'];
if($id!="" && $pwd!="")
{
	$sql=mysqli_query($conn,"select id,pass from user_reg where id=(select id from verify_signup where aadhar_number='".$uid."' and id='".$id."')") or die(mysqli_error($conn));
	$res=mysqli_num_rows($sql);
	$n=mysqli_query($conn,"select name from user_reg where id='".$id."'");
	$row=mysqli_fetch_assoc($n);
	$name=$row['name'];
	if($res>0)
	{
		$_SESSION['un']=$name;
		$_SESSION['id']=$id;
	header("location:voterhome.php");
	}
	else
	{	
	header("location:voterlgnh.php");
	}
}
?>