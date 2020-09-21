<?php

$Firstname =$_POST["Firstname"];
$Lastname =$_POST["Lastname"];
$Email =$_POST["Email"];
$Address =$_POST["Address"];
$City =$_POST["City"];
$operation = $_POST['Buy'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Buy")
{	
	$sql = "insert into bookone (Firstname,Lastname,Book_Ordered,Email,Address,City,Price) values ('".$Firstname."','".$Lastname."','AFRAID TRAPPED ENDURANCE','".$Email."','".$Address."','".$City."',300)";
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Added to Cart";
	header('location: horror.html');
}


?>