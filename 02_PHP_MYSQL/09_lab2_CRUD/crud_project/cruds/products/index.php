<?php 
include '../../includes/header.php';

//1
$read_query = "SELECT `product_id`, `product_name`,`product_price`, `product_calories` FROM `products` WHERE date_deleted IS NULL";

$result = mysqli_query( $conn, $read_query );

//var_dump( $result );

if( mysqli_num_rows( $result ) > 0 ){

	?>
	<h1>Product List <span><a href="create.php" class="btn btn-info">Add New Product</a></span></h1>
	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Price</td>
			<td>Calories</td>
			<td>***</td>
			<td>soft delete</td>
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
				<td><?= $row['product_name']?></td>	
				<td><?= $row['product_price']?></td>	
				<td><?= $row['product_calories']?></td>	
				<td><a href="update.php?id=<?= $row['product_id']?>" class="btn btn-warning">UPDATE</a></td>	
				<td><a href="soft_delete.php?id=<?= $row['product_id']?>">SOFT DELETE</a></td>	
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

