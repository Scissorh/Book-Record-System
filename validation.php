<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'loginDB');
$query="select * from users where username='$username' && password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/brm/homes.php');
}
else
{
	header('location:http://localhost/brm/login.php');
}


?>
