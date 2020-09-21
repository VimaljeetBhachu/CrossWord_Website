<?php
  
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $conn = new mysqli("localhost","root","","bookstore");

    if($conn-> connect_error)
    {
    	echo "Connection to DataBase ERROR!!\n";
    }
    else
    {
    	echo "Connection to Database Estabilished Successfully\n";
    }
    if($Username == "admin@gmail.com" && $Password == "admin@123")
    {
        header('location: pages/home_admin.html');
    }
    else
    {
    	$sql = "select Username , Password from user where Username='".$Username."' and Password = '".$Password."' ";
    	$result = $conn->query($sql);

    	$row = $result->fetch_assoc();

    	if($row["Username"] == $Username && $row["Password"] == $Password)
    	{
    		echo"You are a Valid User!\n";
    	    header('location: edited.html');
    	}
    	else
    	{
    		echo"\nSorry, Your Credentials are not valid, Please Try Again.\n";
        } 
    }
?>