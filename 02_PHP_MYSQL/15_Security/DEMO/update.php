<?php
	include ('includes/header.php');

	$message_id = $_GET['message_id'];

	$datetime = date('Y-m-d H:i:s');

	$get_message_query = "SELECT * FROM messages WHERE message_id = '".$message_id."'";

	$result = mysqli_query($connection, $get_message_query);

	$message = mysqli_fetch_assoc($result);
?>


<h1> Update message with ID <?= $message['message_id'] ?></h1>
<div>
	<form action="updater.php" method="post" accept-charset="utf-8">
		<div>
			<label for='name'>Name</label>
			<input id="name" type="text" name="name" value="<?= $message['name'] ?>">
		</div>

		<div>
			<label for='email'>Email</label>
			<input id="email" type="text" name="email" value="<?= $message['email'] ?>">
		</div>

		<div>
			<label for='phone'>Phone</label>
			<input id="phone" type="text" name="phone" value="<?= $message['phone'] ?>">
		</div>

		<div>
			<label for='message'>Message</label>
			<input id="message" type="text" name="message" value="<?= $message['message'] ?>">
		</div>

		<input type="hidden" name="message_id" value="<?= $message['message_id'] ?>">

		<input type="submit" name="submit" value="Update">
	</form>
</div>

