<?php

$Username =$_GET["Username"];
$Name =$_GET["Name"];
$Mobile =$_GET["Mobile"];
$Password =$_GET["Password"];
$operation = $_GET['signin'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Sign in")
{
	$sql = "insert into user (Username,Name,Mobile,Password) values ('".$Username."','".$Name."',".$Mobile.",'".$Password."')";
}
$r = $conn->query($sql);
if($r==1)
{
	
	echo"Welcome u have successfully created a Account.";
	//echo '<script type="text/javascript"> window.location = "http://www.google.com/"</script>';
	header("Location: index.html");
}

?>