<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("Location: login.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to SoftAOX</title>
</head>
<h1>Welcome to SoftAOX</h1>
<p>This is Login Page</p>
<?=$_SESSION['sess_user'];?>!<a href="logout.php">Logout</a>
<body>
</body>
</html>
<?php
}
?>