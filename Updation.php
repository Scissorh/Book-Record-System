<?php
$size=sizeof($_POST); 
$result=$size/4;
for ($i=1; $i<=$result ; $i++) { 
	$index1="book_id".$i;
    $book_id[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];
}


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($i=1; $i<=$result; $i++)
{
$q="update book set title='$title[$i]', price='$price[$i]', author='$author[$i]' where book_id='$book_id[$i]'" ;
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
<p>
	<?php
	echo "Records updated";
	?>
</p>
Go To Back Home Page <a href="Home.php">Click Here</a>
</body>
</html>