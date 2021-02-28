<?php
	include ('includes/header.php');
?>

<?php

	var_dump($_GET);

	$message_id = $_GET['message_id'];

	$delete_query = "DELETE FROM `messages` WHERE `message_id` = '".$message_id."' LIMIT 1";

	$delete_result = mysqli_query($connection,$delete_query);

	if($delete_result){
		header('Location: recycle.php');
	}
	else{
		die('Delete Failed! Error: '.mysqli_error($connection));
	}
?>


<?php
include ('includes/footer.php');
?>