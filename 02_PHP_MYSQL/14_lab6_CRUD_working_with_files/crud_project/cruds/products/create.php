<?php 
include '../../includes/header.php';
?>
<h1>Add New Product</h1>
<form method="post" action="" enctype="multipart/form-data">
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
	<div class="form-group">
		<label for="product-image">Product image</label>
		<input type="file" id="product-image" name="image" value="">
	</div>
	<button class="btn btn-success">Save</button>
</form>
<?php 

//1 

if( isset( $_POST['product_name'] ) ){

	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_calories = $_POST['product_calories'];

	if( isset( $_FILES['image'] ) ){
		
		if( !empty( isset( $_FILES['image'] ) ) ){
			
			if ($_FILES['product_image']['size'] > 100000) { 
       			die('upload file up to 100kb');
   		 	} 

			$upload_dir = '../../uploads/';
			
			$uploadfile = $upload_dir . basename( $_FILES['image']['name'] );
			
			if ( move_uploaded_file( $_FILES['image']['tmp_name'], $uploadfile ) ) {
				echo "File is valid, and was successfully uploaded.\n";
			} else {
				echo "Possible file upload attack!\n";
			}
		}
	}

//2 insert_query
	$insert_query = "INSERT INTO `products`(`product_name`, `product_price`, `product_calories`,`product_image`) VALUES ('$product_name',$product_price,$product_calories, '$uploadfile')";

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