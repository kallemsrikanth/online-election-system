<?php
require_once("DBConn.php");

	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sql=mysqli_query($conn,"delete from candidate_request where cid='".$id."'");
		header("location:retrieverequest.php");
}