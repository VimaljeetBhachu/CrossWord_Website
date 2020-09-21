<?php

$Name =$_POST["Name"];
$Address =$_POST["Address"];
$operation = $_POST['Buy'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Buy")
{	
	$sql = "insert into book (Name,Bookname,Address) values ('".$Name."','TOM PICCIRILLI','".$Address."')";
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Added ";
	header('location: horror.html');
}


?>