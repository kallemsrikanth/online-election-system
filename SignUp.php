<?php

require_once("DBConn.php"); 

	$sql="INSERT INTO user_reg (id, name, pass, mobile, email) VALUES('" . $_POST["id"] . "', '" . $_POST["name"] . "', '" . $_POST["pass"] . "', '" . $_POST["mobile"] . "', '" . $_POST["email"] . "')";

if ($conn->query($sql) === TRUE) {
   header("location:voterlgnpage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
?>