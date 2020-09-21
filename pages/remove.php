<?php

//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$conn = new mysqli("localhost", "root", "","bookstore");

	
	$sql = "TRUNCATE TABLE confirm";
	


$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully ordered ";
	header('location: confirmed.php');
}


?>