<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:http://localhost/brm/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>
<h2>Hello,<?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>
</body>
</html>