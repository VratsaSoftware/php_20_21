<?php
include '../../includes/header.php';

	$category = "SELECT recipe_category_id, recipe_category_name FROM recipe_categories";

	$result = mysqli_query( $conn, $category );

	$products = "SELECT product_id, product_name FROM products WHERE date_deleted IS NULL";

	$products_result = mysqli_query($conn, $products);

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

	<!-- Products selector-->
	<h3>Моля изберете продукти и количество. Оставете празно количеството, там където няма такъв продукт:</h3>
		<?php
		if( mysqli_num_rows( $products_result ) > 0 ){
					while( $row = mysqli_fetch_assoc( $products_result ) ){

						echo "<div class='form-group'><label>".$row['product_name']."&nbsp;количество:</label>";
						echo "<input class='form-control' name='products_quantity[\"".$row['product_id']."\"]'></div>";
					}
				}
		?>
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

		$new_recipe_id = mysqli_insert_id($conn);

		if(!empty($_POST['products_quantity'])){
			foreach ($_POST['products_quantity'] as $key => $value) {
				if(!empty($value) && $value > 0){
					$insert_product_query = "INSERT INTO recipes_products(recipe_id,product_id,product_quantity) VALUES ($new_recipe_id,$key,$value) ";
					$result_product = mysqli_query($conn,$insert_product_query);
				}
			}

		}


	} else {
		die('Query failed!' . mysqli_error( $conn ));
	}


}
include '../../includes/footer.php';