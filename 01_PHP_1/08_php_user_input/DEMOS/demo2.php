<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form action="file.php" method="post" enctype="multipart/form-data">
		<p>Username</p>
		<input type="text" name="username">
		<p>Password</p>
		<input type="text" name="password">
		<p>file upload</p>
		<input type="file" name="image">
		<p></p>
		<input type="submit" name="submit" value="Send">
	</form>
	
</body>
</html>

