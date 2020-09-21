<?php
$ID =$_POST["ID"];
//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$operation = $_POST['Delete'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Delete")
{
   $sql = "delete from books_data where ID = ".$ID;
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Deleted ";
	header('location: bview.php');
}


?>