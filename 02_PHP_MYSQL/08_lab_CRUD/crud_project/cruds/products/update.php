<?php 
include '../../includes/header.php';
$product_id = $_GET['id'];


$read_query = "SELECT `product_id`, `product_name`, `product_price`, `product_calories` FROM `products` WHERE `product_id`=" . $product_id . " LIMIT 1";
// var_dump( $read_query );


$result = mysqli_query( $conn, $read_query );
if( $result ){
	$row = mysqli_fetch_assoc($result);
	var_dump( $row );
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

	<button class="btn btn-success">Save</button>
</form>
<?php 
if( !empty($_POST) ){
	
	$product_name = $_POST['product_name'];
	$product_id = $_POST['product_id'];
	$product_calories = $_POST['product_calories'];
	$product_price = $_POST['product_price'];

	$update_query = "UPDATE `products` SET `product_name`='$product_name',`product_price`=$product_price,`product_calories`=$product_calories WHERE product_id=" . $product_id;

	// var_dump($update_query);
	// die;
	$update_res = mysqli_query($conn, $update_query);
	if( !$update_res ){
		die('Update failed!' . mysqli_error($conn));
	}else {
		header("Location: index.php");
		echo "Update successful!";
	}
}

include '../../includes/footer.php';