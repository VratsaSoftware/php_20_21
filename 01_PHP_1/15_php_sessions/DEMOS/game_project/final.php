<?php 
$title = 'Final results';
$page_title = 'Final results';

	include 'includes/header.php';
?>

	<h3><?php echo $_SESSION['user_name']; ?>, 
	<?php 

	test();
		if( $_POST['answer'] == '1' ){
			$_SESSION['game_result'] += 1;
		}
	?>
		<span>Current score: <?= $_SESSION['game_result'] ?></span></h3>
		<a href="session_destroy.php">Exit</a>
<?php 
	include 'includes/footer.php';
?>