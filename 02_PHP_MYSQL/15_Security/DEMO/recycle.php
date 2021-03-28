<?php
include ('includes/header.php');
?>
<h1> Recycle Bin</h1>

<div>
	<h2> All Soft-Deleted Messages </h2>

	<a href="index.php" class="btn btn-sm btn-primary">Back</a>

	<?php

		$read_query = "SELECT * FROM messages WHERE `deleted_at` IS NOT NULL ORDER BY `created_at` DESC";

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
						echo "<th>deleted_at</th>";
						echo "<th>actions</th>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";

			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
					echo "<td>".$row['message_id']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['phone']."</td>";
					echo "<td>".$row['message']."</td>";
					echo "<td>".$row['created_at']."</td>";
					echo "<td>".$row['deleted_at']."</td>";
					echo "<td>
							<a href='delete.php?message_id=".$row['message_id']."' class='btn btn-sm btn-danger'>Delete</a>

							<a href='restore.php?message_id=".$row['message_id']."' class='btn btn-sm btn-success'>Restore</a>
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
