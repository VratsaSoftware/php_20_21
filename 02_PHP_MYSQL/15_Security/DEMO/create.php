<?php
include ('includes/header.php');
session_start();

?>
<h1> Add message </h1>

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<form action="" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label for='name'>Name</label>
						<input class="form-control" id="name" type="text" name="name" value="">
					</div>

					<div class="form-group">
						<label for='email'>Email</label>
						<input class="form-control" id="email" type="text" name="email" value="">
					</div>

					<div class="form-group">
						<label for='phone'>Phone</label>
						<input class="form-control" id="phone" type="text" name="phone" value="">
					</div>

					<div class="form-group">
						<label for='message'>Message</label>
						<input class="form-control" id="message" type="text" name="message" value="">
					</div>

					<button  class="btn btn-primary" type="submit">Send&nbsp; </button>
				</form>
			</div>
		</div>

<?php


	$error = 0;

	//htmlspecialchars()
	//strip_tags()
	//filter_var()

	if(isset($_POST['name'])){
		$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
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
			header("Location: messages.php");

		}
		else {
			die('Insert qurey failed! Error: '.mysqli_error($connection));
		}
	}




?>

	</div>
</div>

<?php
include ('includes/footer.php');
?>
