<?php
$id =$_POST["id"];
//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$operation = $_POST['Delete'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Delete")
{
   $sql = "delete from user where id = ".$id;
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Deleted ";
	header('location: admin.php');
}


?>