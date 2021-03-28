<?php
include ('includes/header.php');
session_start();

if(!$_SESSION['logged_user_email']){
	header('Location: index.php');
}

$user_email = $_SESSION['logged_user_email'];

?>

<h1> Hello <?= $user_email ?> </h1>


<div>
	<h2> All Messages </h2>
	<a href="create.php" class="btn btn-sm btn-primary">Create</a>

	<a href="recycle.php" class="btn btn-sm btn-secondary">Recycle Bin</a>

	<?php

		$read_query = "SELECT * FROM messages WHERE `deleted_at` IS NULL ORDER BY `created_at` DESC";

		$result = mysqli_query($connection, $read_query);

		if(mysqli_num_rows($result) > 0){

			echo "<table class='table table-bordered'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th>id</th>";
						echo "<th>name</th>";
						echo "<th>email</th>";
						echo "<th>phone</th>";
						echo "<th>message</th>";
						echo "<th>created_at</th>";
						echo "<th>actions</th>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";

			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
					echo "<td>".$row['message_id']."</td>";
					//field with escaped characters
					echo "<td>".htmlspecialchars($row['name'])."</td>";
					// old way
					// echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['phone']."</td>";
					echo "<td>".$row['message']."</td>";
					echo "<td>".$row['created_at']."</td>";
					echo "<td>
							<a href='update.php?message_id=".$row['message_id']."' class='btn btn-sm btn-info'>UPDATE</a>

							<a href='soft_delete.php?message_id=".$row['message_id']."' class='btn btn-sm btn-warning'>SoftDelete</a>
						</td>";
				echo "</tr>";

			}
			echo "</tbody>";
			echo "</table>";

		}
		else{
			echo "Няма намерени резултати!";
		}

	?>




</div>


<?php
include ('includes/footer.php');
?>
