<?php
include '../../includes/header.php';

	$category = "SELECT recipe_category_id, recipe_category_name FROM recipe_categories";

	$result = mysqli_query( $conn, $category );

?>

<h1>Add New Recipe</h1>
<form method="post" action="">
	<div class="form-group">
		<label>Enter Recipe Name</label>
		<input class="form-control" type="text" name="recipe_name">
	</div>
	<div class="form-group">
		<label>Enter Recipe Description</label>
		<input class="form-control" type="text" name="prep_description">
	</div>
	<div class="form-group">
		<label>Enter Prep Time</label>
		<input class="form-control" type="text" name="prep_time">
	</div>
	<div class="form-group">
		<select class="form-control" name="recipe_category_id">
			<option value="" selected="selected" disabled="disabled">Please Chose Category</option>

			<?php
			if( mysqli_num_rows( $result ) > 0 ){
				while( $row = mysqli_fetch_assoc( $result ) ){
					echo "<option value=".$row['recipe_category_id']." selected>".$row['recipe_category_name']."</option>";
				}

			} else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>

		</select>
	</div>

	<button class="btn btn-success">Save</button>
</form>

<?php

$current_date = date('Y-m-d');

if( isset( $_POST['recipe_name'] ) ){

	$recipe_name = $_POST['recipe_name'];
	$prep_description = $_POST['prep_description'];
	$prep_time = $_POST['prep_time'];
	$recipe_category_id = $_POST['recipe_category_id'];


//2 insert_query
	$insert_query = "INSERT INTO `recipes`(`recipe_name`, `prep_description`, `prep_time`,`date_created`,`recipe_category_id`) VALUES ('$recipe_name','$prep_description',$prep_time, '$current_date', '$recipe_category_id')";



// var_dump( $insert_query );
// //3
	$result = mysqli_query( $conn, $insert_query );


	if( $result ){
		echo "Record created successfuly";
	} else {
		die('Query failed!' . mysqli_error( $conn ));
	}


}
include '../../includes/footer.php';