<?php
include ('includes/header.php');

$message_id = $_GET['message_id'];

$datetime = date('Y-m-d H:i:s');

$update_query = "UPDATE `messages` SET `deleted_at` = null WHERE `message_id` = '".$message_id."'";

$result = mysqli_query($connection,$update_query);

if($result){
	header('Location: recycle.php');
}
else{
	die('Restore Failed! Error: '.mysqli_error($connection));
}


?>

<?php
include ('includes/footer.php');
?>