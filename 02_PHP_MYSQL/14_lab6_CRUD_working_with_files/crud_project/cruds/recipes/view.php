<?php
include '../../includes/header.php';



if(!empty($_GET['id'])){
	//1
	$read_query = "SELECT recipes.recipe_name,products.product_name,recipes_products.product_quantity FROM recipes LEFT JOIN recipes_products ON recipes.recipe_id = recipes_products.recipe_id LEFT JOIN products ON recipes_products.product_id = products.product_id WHERE recipes.recipe_id =".$_GET['id'];

	$result = mysqli_query( $conn, $read_query );

	// var_dump( mysqli_fetch_all($result, MYSQLI_ASSOC));

	// die();

	if( mysqli_num_rows( $result ) > 0 ){

		?>
		<h1>
			Products for recipe&nbsp;<?= $_GET['name']?>
		</h1>
		<table style="margin-left: 50px" class="table table-striped">
			<tr>
				<td>#</td>
				<td>Product</td>
				<td>Quantity</td>
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
					<td><?= $row['product_quantity']?></td>
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


}
?>
<!-- CTRL + [  или ] -->


