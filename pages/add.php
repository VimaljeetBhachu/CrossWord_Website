<?php

$Username =$_POST["Username"];
$Name =$_POST["Name"];
$Mobile =$_POST["Mobile"];
$Password =$_POST["Password"];
$operation = $_POST['Add'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Add")
{	
	$sql = "insert into user (Username,Name,Mobile,Password) values ('".$Username."','".$Name."','".$Mobile."','".$Password."')";
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Added ";
	header('location: admin.php');
}


?>