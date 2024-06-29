<?php
ini_set('display_errors',0);
require_once("DBConn.php");
$eid=$_POST['candidates'];
$sql=mysqli_query($conn,"select * from election where eid='".$eid."'");
$res=mysqli_fetch_assoc($sql);
$ename=$res['ename'];
$noc=$res['noc'];
$constiuency=$res['constiuency'];
$query=mysqli_query($conn,"insert into endelection1(eid,ename,noc,constiuency) values('".$eid."','".$ename."','".$noc."','".$constiuency."')");
if($res==null){
	header("location:endelection3.php");
}
else{
$sql1=mysqli_query($conn,"select * from election2 where eid='".$eid."'");
while($res1=mysqli_fetch_assoc($sql1))
{
	$cid=$res1['cid'];
	$cname=$res1['cname'];
	$desc=$res1['description'];
	$party=$res1['party'];
	$vcount=$res1['vcount'];
	
$query1=mysqli_query($conn,"insert into endelection(eid,cid,cname,description,party,vcount) values('".$eid."','".$cid."','".$cname."','".$desc."','".$party."','".$vcount."')");
	

$sql3=mysqli_query($conn,"delete from election2 where eid='".$eid."'");	

header("location:endelection2.php");
}

$sql2=mysqli_query($conn,"delete from election where eid='".$eid."'");
}
?>