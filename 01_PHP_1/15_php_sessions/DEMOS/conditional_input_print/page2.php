<?php 
session_start();
echo "<p>Your session ID is ".session_id().".</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Question</title>
</head>
<body>
	
	<?php $fields = $_POST['number'];?>
	<form method="post" action="">
		<?php for($i = 0; $i< $fields; $i++) { ?>
			<input type="text" name="name[<?= $i ?>]">
		<?php } ?>
		<input type="submit" name="submit" value="answer">
	</form>
	<?php 

var_dump( $_POST );
	?>
</body>
</html>