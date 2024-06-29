<?php
session_start();
require_once("DBConn.php"); 
$eid=$_POST["eid"];
$constiuency=$_POST["constiuency"];
$noc=0;
$sql="INSERT INTO election(eid, ename, noc,constiuency) VALUES('" . $eid . "', '" . $_POST["en"] . "', '" .$noc . "','".$constiuency."')";
if ($conn->query($sql) === TRUE) {
	/*$no=mysqli_query($conn,"select noc from election where eid='".$eid."'");
		$row=mysqli_fetch_assoc($no);
		$r=$row['noc'];
	$_SESSION['noc']=$r;
	$ei=mysqli_query($conn,"select eid from election where eid='".$eid."'");
		$row1=mysqli_fetch_assoc($ei);
		$r1=$row1['eid'];
	$_SESSION["eid"]=$r1;*/
       header("location:adminhome.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>