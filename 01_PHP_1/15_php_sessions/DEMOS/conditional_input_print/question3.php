<?php 
	session_start();
	// echo "<p>Your session ID is ".session_id().".</p>";
	echo $_SESSION['user_name'];
	if( $_POST['answer'] == '1' ){
		$_SESSION['game_result'] += 1;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Question</title>
</head>
<body>
	<a href="session_destroy.php">Exit</a>
	<h1>Question 3</h1>
	<p>Current score: <?= $_SESSION['game_result'] ?></p>
	<form method="post" action="final.php">
		Select answer
	<input type="radio" name="answer" value="0">Answer 1
	<input type="radio" name="answer" value="0">Answer 2
	<input type="radio" name="answer" value="1">Answer 3
	<input type="submit" name="submit" value="answer">
</form>
</body>
</html>