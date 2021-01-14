<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>
	<?php if( isset( $_SESSION['sum'] ) ){ ?>
			<p style="color: red"><?php echo $_SESSION['sum']; ?></p>
	<?php } ?>
	<form action="script.php" method="post">
		<input type="text" name="num">
		<input type="submit" name="add">
	</form>

</body>
</html>