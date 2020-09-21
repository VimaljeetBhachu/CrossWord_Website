<!doctype html>
<html>
<head>
<title>User Registration</title>
</head>
<body>
<h1>User Registration</h1>
<form action="" method="post">
<label>Username :</label><input type="text" name="username"><br/><br/>
<label>Password:</label><input type="password" name="password"><br/><br/>
<input type="submit" value="Register" name="submit"><br/><br/>
<!-- Login Link -->
<a href="login.php">Login</a>
</form>
<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn = new mysqli('localhost', 'root', '','company') or die (mysqli_error()); // DB Connection
		$db = mysqli_select_db($conn, 'company') or die("DB Error"); // Select DB from database
		//Selecting Database
		$query = mysqli_query($conn, "SELECT * FROM login WHERE username='".$username."'");
		$numrows = mysqli_num_rows($query);
		if($numrows == 0)
		{
			//Insert to Mysqli Query
			$sql = "INSERT INTO login(username,password) VALUES('$username','$password')";
			$result = mysqli_query($conn, $sql);
			//Result Message
			if($result){
				echo "Your Account Created Successfully";
			}
			else
			{
				echo "Failure!";
			}
		}
		else
		{
			echo "That Username already exists! Please try again.";
		}
	}
	else
	{
		?>
		<!--Javascript Alert -->
        <script>alert('Required all felds');</script>
        <?php
	}
}
?>
</body>
</html>