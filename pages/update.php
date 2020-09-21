<?php
$id =$_POST["id"];
$Username =$_POST["Username"];
$Name =$_POST["Name"];
$Mobile =$_POST["Mobile"];
$Password =$_POST["Password"];
$operation = $_POST['Update'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Update")
{
    $sql = "update user set Username = '".$Username."',Name = '".$Name."',Mobile = '".$Mobile."',Password = '".$Password."' where id = ".$id;
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Updated ";
	header('location: admin.php');
}
?>