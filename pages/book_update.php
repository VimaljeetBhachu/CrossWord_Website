<?php
$ID =$_POST["ID"];
$Name =$_POST["Name"];
$Author =$_POST["Author"];
$Zoner =$_POST["Zoner"];
$Price =$_POST["Price"];
$Quantity =$_POST["Quantity"];
$operation = $_POST['Update'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Update")
{	
	$sql = "update books_data set Name = '".$Name."',Author = '".$Author."',Zoner = '".$Zoner."',Price = ".$Price.",Quantity = ".$Quantity." where ID = ".$ID;
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Added ";
	header('location: bview.php');
}


?>