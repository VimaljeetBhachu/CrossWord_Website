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
	if ($Email == "jeetvimal98singh@gmail.com") 
	{
		$sql = "insert into jeetvimal98singh (Firstname,Lastname,Book_Ordered,Email,Address,City,Price) values ('".$Firstname."','".$Lastname."','HAUNTED NIGHTS','".$Email."','".$Address."','".$City."',210)";
	}
	else if($Email == "tanishporwal14dec@gmail.com")
	{
		$sql = "insert into tanishporwal14dec (Firstname,Lastname,Book_Ordered,Email,Address,City,Price) values ('".$Firstname."','".$Lastname."','HAUNTED NIGHTS','".$Email."','".$Address."','".$City."',210)";
	}
	else if($Email == "chouhan.surendra100@gmail.com")
	{
		$sql = "insert into chouhan.surendra100 (Firstname,Lastname,Book_Ordered,Email,Address,City,Price) values ('".$Firstname."','".$Lastname."','HAUNTED NIGHTS','".$Email."','".$Address."','".$City."',210)";
	}
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Added to Cart";
	header('location: horror.html');
}


?>