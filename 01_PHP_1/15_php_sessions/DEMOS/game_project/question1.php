<?php 
$title = 'question 1';
$page_title = 'Question 1';

	include 'includes/header.php';
	test();
?>


	<p>Current score: <?= $_SESSION['game_result'] ?></p>
	<form method="post" action="question2.php">
		Select answer
	<input type="radio" name="answer" value="0">Answer 1
	<input type="radio" name="answer" value="0">Answer 2
	<input type="radio" name="answer" value="1">Answer 3
	<input type="submit" name="submit" value="answer">
</form>
<?php 
	include 'includes/footer.php';
?>