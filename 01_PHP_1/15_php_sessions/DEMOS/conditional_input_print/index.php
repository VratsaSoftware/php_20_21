<?php 
	session_start();
	// echo "<p>Your session ID is ".session_id().".</p>";
	$_SESSION['game_result'] = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1> Start game</h1>
		<form method="post" action="page2.php">
		Enter number of fields
		<input type="text" name="number">
		
		<input type="submit" name="submit" value="start">
	</form>
	
</body>
</html>