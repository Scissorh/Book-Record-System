<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'brm_db');


$q="insert into book(title,price,author) values('$title','$price','$author')";
mysqli_query($con,$q);
echo "&q";
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insertion</title>
</head>
<body>
<h1>Book Management System</h1>
<!--<p><?php if($status==1) echo "Record inserted";
     else echo "Insertion Failed"; ?></p>
-->
Do you want to insert more record <a href="InsertionForm.php" > Click Here </a>
</body>
</html>