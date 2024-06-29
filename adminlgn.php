<?php

require_once("DBConn.php"); 
session_start();
$name=$_POST['auname'];
$pwd=$_POST['apwd'];
$_SESSION['auname']=$name;
if($name!="" && $pwd!="")
{
	$sql=mysqli_query($conn,"select auname,apwd from admin_login where auname='".$name."' and apwd='".$pwd."'") or die(mysql_error());
	$res=mysqli_num_rows($sql);
	if($res>0)
	{
		$_SESSION['auname']=$name;
			header("location:adminhome.php");
	}
	
	else
	{	
	header("location:adminlgnh.php");
	}
}

?>