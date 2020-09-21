<?php
if(isset($_POST["Login"])){
	if(!empty($_POST['Username']) && !empty($_POST['Password'])){
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		//DB Connection
		$conn = new mysqli('localhost', 'root', '','bookstore') or die(mysqli_error());
		//Select DB From database
		$db = mysqli_select_db($conn, 'bookstore') or die("databse error");
		//Selecting database
		$query = mysqli_query($conn, "SELECT * FROM user WHERE Username='".$Username."' AND Password='".$Password."'");
		$numrows = mysqli_num_rows($query);
		if($Username == "admin@gmail.com" && $Password == "admin@123")
        {
        	 session_start();
			 $_SESSION['sess_user']="admin";
			 //Redirect Browser
             header('location: pages/home_admin.php');
        }
        else
        {
		if($numrows !=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbUsername=$row['Username'];
				$dbPassword=$row['Password'];
			}
			if($Username == $dbUsername && $Password == $dbPassword)
			{
				session_start();
				$_SESSION['sess_user']=$Username;
				//Redirect Browser
				header("Location:edited.php");
			}
		}
		else
		{
			echo "Invalid Username or Password!";
		}
	}
	}
	else
	{
		echo "Required All fields!";
	}
}
?>