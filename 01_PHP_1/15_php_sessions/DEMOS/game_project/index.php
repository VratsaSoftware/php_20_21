<?php 
$title = 'Start';
$page_title = 'Game start';

	include 'includes/header.php';
?>
	<?php $_SESSION['game_result'] = 0; ?>
	<p>Current score: <?= $_SESSION['game_result'] ?></p>
	<form method="post" action="">
		Enter your name
		<input type="text" name="name">
		<?php if( isset( $_SESSION['error_name'] ) ){ echo $_SESSION['error_name']; }?>
		<input type="submit" name="submit" value="start">
	</form>
	<?php 
	if( isset( $_POST['submit'] ) ){		
		
		if( empty( $_POST['name'] ) ){
			$_SESSION['error_name'] = 'Name is required!';
		}else{
			$_SESSION['user_name'] = $_POST['name'];
			unset( $_SESSION['error_name'] );
			header('Location: question1.php');
		}
	}

	?>
<?php 
	include 'includes/footer.php';
?>