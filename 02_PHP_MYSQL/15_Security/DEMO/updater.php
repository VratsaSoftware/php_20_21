<?php
	include ('includes/header.php');
?>

<?php

	$update_query = "
	UPDATE `messages`
	SET
			`name` = '".$_POST['name']."',
			`email` = '".$_POST['email']."',
			`phone` = '".$_POST['phone']."',
			`message` = '".$_POST['message']."' WHERE `message_id` = '".$_POST['message_id']."'";

	$update_result = mysqli_query($connection,$update_query);

	if($update_result){
		header('Location: index.php');
	}
	else{
		die('Update Failed! Error: '.mysqli_error($connection));
	}
?>


<?php
include ('includes/footer.php');
?>