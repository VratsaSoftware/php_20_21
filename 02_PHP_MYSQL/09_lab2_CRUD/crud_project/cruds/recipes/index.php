<?php
include '../../includes/header.php';

//1
$read_query = "SELECT a.recipe_id,a.recipe_name, a.prep_description, a.prep_time, b.recipe_category_name, a.date_created FROM recipes a left join recipe_categories b on a.recipe_category_id = b.recipe_category_id where a.date_deleted is null";

$result = mysqli_query( $conn, $read_query );

// var_dump( mysqli_fetch_all($result, MYSQLI_ASSOC));

// die();

if( mysqli_num_rows( $result ) > 0 ){

	?>
	<h1>Recipes list <span><a href="create.php" class="btn btn-info">Add New Recipe</a></span></h1>
	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<td>#</td>
			<td>Recipe Name</td>
			<td>Preparation</td>
			<td>Time</td>
			<td>Category</td>
			<td>Created_at</td>
			<td>Update</td>
			<td>Soft delete</td>
		</tr>
		<?php
		$num = 1;
		while( $row = mysqli_fetch_assoc( $result ) ){
			// echo "<pre>";
			// var_dump( $row );
			// echo "</pre>";
			?>
			<tr>
				<td><?= $num ++ ?></td>
				<td><?= $row['recipe_name']?></td>
				<td><?= $row['prep_description']?></td>
				<td><?= $row['prep_time']?></td>
				<td><?= $row['recipe_category_name']?></td>
				<td><?= $row['date_created']?></td>
				<td><a href="update.php?id=<?= $row['recipe_id']?>" class="btn btn-warning disabled">UPDATE</a></td>
				<td><a href="soft_delete.php?id=<?= $row['recipe_id']?>">SOFT DELETE</a></td>
			</tr>
			<?php
		}
		?>
	</table>

	<a href="recycle_bin.php">Recycle Bin</a>
	<?php

} else {
	die('Query failed!' . mysqli_error($conn));
}
?>

