<?php
//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$operation = $_POST['cnfm'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Confirm Booking")
{
   //$sql = "SELECT Sno,Firstname,Lastname,Book_Ordered,Email,Address,City,Price INTO confirm FROM bookone";
	$sql = "INSERT confirm SELECT * FROM bookone";
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Confirmed ";
	header('location: confirmed.php');
}
else
{
	echo"Already added";
	header('location: reconfirm.php');
}


?>