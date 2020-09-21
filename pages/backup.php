<?php

//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$operation = $_POST['Order'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Order")
{	
	$sql = "INSERT copy_confirm SELECT * FROM confirm";
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully ordered ";
	header('location: logout.php');
}


?>