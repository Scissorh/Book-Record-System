<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="./css/viewStyle.css">-->
	<title>View book Records</title>
</head>
<body>
	<h1>Book Record Management </h1>
	<table>
		<tr>
			<th>Book Id</th>
			<th>title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
<?php
for($i=1 ; $i<=$num ; $i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
	<td><?php echo $row['book_id']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['price']; ?></td>
	<td><?php echo $row['author']; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>