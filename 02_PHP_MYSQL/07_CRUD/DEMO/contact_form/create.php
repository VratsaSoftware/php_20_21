<?php
include ('includes/header.php');
?>
<h1> Add message </h1>
<div>
	<form action="" method="post" accept-charset="utf-8">
		<div>
			<label for='name'>Name</label>
			<input id="name" type="text" name="name" value="">
		</div>

		<div>
			<label for='email'>Email</label>
			<input id="email" type="text" name="email" value="">
		</div>

		<div>
			<label for='phone'>Phone</label>
			<input id="phone" type="text" name="phone" value="">
		</div>

		<div>
			<label for='message'>Message</label>
			<input id="message" type="text" name="message" value="">
		</div>

		<input type="submit" name="submit" value="save">
	</form>
</div>

<?php
	$error = 0;

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		if(strlen($name) < 3){
			echo "<p>Name must be min 3 characters</p>";
			$error++;
		}
	}
	else{
		$error++;
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	else{
		$error++;
	}

	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
	}

	if(isset($_POST['message'])){
		$message = $_POST['message'];
		if(strlen($message) < 3){
			echo "<p>Message must be min 3 characters</p>";
			$error++;
		}
	}

	if($error > 0){
		echo "<p>Error/s found! Please check input data!</p>";
	}
	else{
		//insert record in DB
		$date = date('Y-m-d H:i:s');

		$insert_query = "INSERT INTO `messages`(`name`,`email`,`phone`,`message`,`created_at`) 
		VALUES ('".$name."','".$email."','".$phone."','".$message."','".$date."')";

		$result = mysqli_query($connection, $insert_query);

		if($result){
			echo "Successfully created record!";
		}
		else {
			die('Insert qurey failed! Error: '.mysqli_error($connection));
		}
	}




?>

<?php
include ('includes/footer.php');
?>
