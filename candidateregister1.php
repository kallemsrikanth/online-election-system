<?php

require_once("DBConn.php"); 
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql="INSERT INTO candidate (cid, cuname, cpname, cemail,cmobile, cpass,image) VALUES('" . $_POST["cid"] . "', '" . $_POST["cuname"] . "', '" . $_POST["cpname"] . "', '" . $_POST["cemail"] . "', '" . $_POST["cmobile"] . "','".$_POST["cpass"]."','{$image}')";
    if ($conn->query($sql) === TRUE) {
   header("location:candidatelgnpage.html");
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
?>