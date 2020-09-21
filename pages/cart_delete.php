<?php
$Sno = $_POST["Sno"];
//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$operation = $_POST['Delete'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Delete")
{
   $sql = "delete from bookone where Sno = ".$Sno;
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Deleted ";
	header('location: shopping_cart.php');
}


?>