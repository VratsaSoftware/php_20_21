<?php 
include '../../includes/header.php';
?>
<h1>Add New Product</h1>
<form method="post" action="">
	<div class="form-group">
		<label>Enter Product Name</label>
		<input class="form-control" type="text" name="product_name">
	</div>
	<div class="form-group">
		<label>Enter Product Price</label>
		<input class="form-control" type="text" name="product_price">
	</div>
	<div class="form-group">
		<label>Enter Product Calories</label>
		<input class="form-control" type="text" name="product_calories">
	</div>

	<button class="btn btn-success">Save</button>
</form>
<?php 

//1 

if( isset( $_POST['product_name'] ) ){

	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_calories = $_POST['product_calories'];


//2 insert_query
	$insert_query = "INSERT INTO `products`(`product_name`, `product_price`, `product_calories`) VALUES ('$product_name',$product_price,$product_calories)";

// var_dump( $insert_query );
// //3
	$result = mysqli_query( $conn, $insert_query );


	if( $result ){
		echo "Recorded created successfuly";
	} else {
		die('Query failed!' . mysqli_error( $conn ));
	}


}
include '../../includes/footer.php';