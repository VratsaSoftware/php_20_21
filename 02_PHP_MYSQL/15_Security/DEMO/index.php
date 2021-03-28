<?php
include ('includes/header.php');

session_start();

?>

<h1> Welcome! </h1>
<h2>Please sign in or sign up</h2>
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<form action="" method="post" accept-charset="utf-8">

					<div class="form-group">
						<label for='email'>Email</label>
						<input class="form-control" id="email" type="text" name="email" value="">
					</div>

					<div class="form-group">
						<label for='password'>Password</label>
						<input class="form-control" id="password" type="text" name="password" value="">
					</div>

					<button  class="btn btn-primary" type="submit">Sign in</button>
				</form>
			</div>
		</div>


<?php
	$error = 0;

	if(isset($_POST['password'])){
		$password = $_POST['password'];
		if(strlen($password) < 3){
			echo "<p>Password be min 3 characters</p>";
			$error++;
		}
	}
	else{
		$error++;
	}

	if(isset($_POST['email'])){
		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

			$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

		}

		else{
			die('INVALID EMAIL');
		}

	}
	else{
		$error++;
	}


	if($error > 0){
		echo "<p>Error/s found! Please check input data!</p>";
	}
	else{

		// how to access property(p.s like variable) and method (like function) of object instance
		// $connection->variable_name;
		// $connection->function_name();


		// Old way - mysqli without prepared statements
		// $get_user_query = "SELECT email FROM users WHERE email = '$email' AND password = '$password'";
		// $result = mysqli_query($connection, $get_user_query);

		//new way - mysqli OOP style with prepared statements:
		$stmt = $connection->prepare("SELECT email FROM users WHERE email =? AND password =?");
		$stmt->bind_param("is",$email,$password);
		$stmt->execute();
		$result = $stmt->get_result();
		$result = $result->fetch_assoc();

		if($result){

			if(isset($result['email'])){
				echo "Logged!";
				$_SESSION['logged_user_email'] = $email;
				header('Location: messages.php');
			}
			else{
				echo "Please check email/password!";
			}

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
