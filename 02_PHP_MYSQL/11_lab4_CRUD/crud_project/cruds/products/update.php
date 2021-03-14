<?php 
include '../../includes/header.php';
$product_id = $_GET['id'];


$read_query = "SELECT `product_id`, `product_name`, `product_price`, `product_calories`, product_category_id FROM `products` WHERE `product_id`=" . $product_id . " LIMIT 1";
// var_dump( $read_query );


$result = mysqli_query( $conn, $read_query );
if( $result ){
	$row = mysqli_fetch_assoc($result);	
}

?>

<h1>Edit Product</h1>
<form method="post" action="">
	<input type="hidden" name="product_id" value="<?=  $row['product_id'] ?>">
	<div class="form-group">
		<label>Enter Product Name</label>
		<input class="form-control" type="text" name="product_name" value="<?= $row['product_name'] ?>">
	</div>
	<div class="form-group">
		<label>Enter Product Price</label>
		<input class="form-control" type="text" name="product_price" value="<?= $row['product_price'] ?>">
	</div>
	<div class="form-group">
		<label>Enter Product Calories</label>
		<input class="form-control" type="text" name="product_calories" value="<?= $row['product_calories'] ?>">
	</div>
	<div class="form-group">
		<?php 
		$category_query = "SELECT * FROM `product_categories` WHERE `date_deleted` IS NULL";
		$categories = mysqli_query( $conn, $category_query );
		?>
		<label>Select Category</label>
		<select name="product_category_id">
			<option value="">-select category-</option>
			<?php 
			while( $category = mysqli_fetch_assoc( $categories ) ){
				?>
				
				<option value="<?= $category['product_category_id']?>" <?php if( $category['product_category_id'] == $row['product_category_id'] ){ echo 'selected=true'; } ?>><?=  $category['product_category_name']; ?></option>
				<?php
			}
			?>
		</select>
	</div>

	<button class="btn btn-success">Save</button>
</form>
<?php 
if( !empty($_POST) ){
	
	$product_name = $_POST['product_name'];
	$product_id = $_POST['product_id'];
	$product_calories = $_POST['product_calories'];
	$product_price = $_POST['product_price'];
	$category = $_POST['product_category_id'];

	//check if category is not empty


	$update_query = "UPDATE `products`";
	$update_query .= " SET `product_name`='$product_name',";
	$update_query .= "`product_price`=$product_price,`product_calories`=$product_calories";
	
	if( !empty( $category ) ){

		$update_query .= ",product_category_id=$category";
	}

	$update_query .= " WHERE product_id=" . $product_id;

	$update_res = mysqli_query($conn, $update_query);
	if( !$update_res ){
		die('Update failed!' . mysqli_error($conn));
	}else {
		header("Location: index.php");
		echo "Update successful!";
	}
}

include '../../includes/footer.php';