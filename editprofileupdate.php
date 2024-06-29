<?php
require_once("DBConn.php");


$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];


$sql = mysqli_query($conn,"update user_reg set name='".$name."',pass='".$pass."',mobile='".$mobile."',email='".$email."' where id='".$id."'");

if($sql)
	header("location:voterhome1.php");
else
	echo "not updated";




?>