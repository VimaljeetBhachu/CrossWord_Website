<?php
$Name =$_POST["Name"];
$Author =$_POST["Author"];
$Zoner =$_POST["Zoner"];
$Price =$_POST["Price"];
$Quantity =$_POST["Quantity"];
$operation = $_POST['Add'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Add")
{	
	$sql = "insert into books_data (Name,Author,Zoner,Price,Quantity) values ('".$Name."','".$Author."','".$Zoner."',".$Price.",".$Quantity.")";
}

$r = $conn->query($sql);

if($r==1)
{
	
	echo "Successfully Added ";
	header('location: bview.php');
}


?>