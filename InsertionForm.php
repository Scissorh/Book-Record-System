<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insertion Form</title>
</head>
<body>
	<h1>Book Record Management </h1>
	<form action="Insertion.php" method="post">
		<table>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Insert"></td>
			</tr>
		</table>
	</form>

</body>
</html>
