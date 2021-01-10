<?php 
$title = 'question 3';
$page_title = 'Question 3';

	include 'includes/header.php';
?>
	<a href="session_destroy.php">Exit</a>

	<?php 
	if( $_POST['answer'] == '1' ){
		$_SESSION['game_result'] += 1;
	}
	?>
	<p>Current score: <?= $_SESSION['game_result'] ?></p>
	<form method="post" action="final.php">
		Select answer
		<input type="radio" name="answer" value="0">Answer 1
		<input type="radio" name="answer" value="0">Answer 2
		<input type="radio" name="answer" value="1">Answer 3
		<input type="submit" name="submit" value="answer">
	</form>
<?php 
	include 'includes/footer.php';
?>