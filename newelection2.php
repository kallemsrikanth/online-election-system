<?php
require_once("DBConn.php"); 
session_start();

$file=$_FILES['image']['name'];
if(!empty($file))
{
	$imgname=$_FILES['image']['name'];
	$imgdata=mysqli_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
	$imgtype=$_FILES['image']['type'];
	if(substr($imgtype,0,5)=="image")
	{
		$sql="INSERT INTO election2(eid,cid, cname, description,image,party) VALUES('" . $_SESSION['eid'] . "','" . $_POST['cid'] . "', '" . $_POST["cn"] . "', '" .$_POST["cd"] . "','".$imgname."','".$_POST["pname"]."')";
		echo "row inserted";
	}
	else
	{
		echo "only images are allowed";
	}
	
}
else
	echo "not uploaded";


if ($conn->query($sql) === TRUE) {
	if($_SESSION['noc']!=1)
	{	$noc1=$_SESSION['noc'];
		$noc1--;
		$_SESSION['noc']=$noc1;
	header("location:newelection2.html");
	
	}
	else
	{
		
		header("location:adminhome.php");
	}
}
else
{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>