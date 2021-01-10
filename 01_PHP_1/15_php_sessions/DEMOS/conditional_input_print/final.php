<?php 
	session_start();
	// echo "<p>Your session ID is ".session_id().".</p>";
	//echo $_SESSION['user_name'];
	var_dump( $_POST );
	if( $_POST['answer'] == '1' ){
		$_SESSION['game_result'] += 1;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Final result</title>
</head>
<body>
	<h1><?php echo $_SESSION['user_name']; ?>, 
	<span>Current score: <?= $_SESSION['game_result'] ?></span></h1>
	<a href="session_destroy.php">Exit</a>
	
</body>
</html>