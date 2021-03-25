<?php 
include '../../includes/header.php';

$filter_query = '';

if(isset($_GET['filter'])){

$filter_query = " AND p.product_name LIKE '%".$_GET['filter']."%' OR p.product_calories LIKE '%".$_GET['filter']."%'";
}

//1
// $read_query = "SELECT `product_id`, `product_name`,`product_price`, `product_calories` FROM `products` WHERE date_deleted IS NULL";
$read_query = "SELECT p.`product_id`, p.`product_name`, p.`product_price`, p.`product_calories`, pc.product_category_name, p.product_image FROM `products` p LEFT JOIN product_categories pc ON p.`product_category_id`=pc.product_category_id WHERE p.date_deleted IS NULL $filter_query";


//2 columns 2 table - same name
// $read_query = "SELECT p.`product_id`, p.product_name,pc.date_deleted, p.date_deleted as product_date_deleted, pc.product_category_name FROM `products` p LEFT JOIN product_categories pc ON p.`product_category_id`=pc.product_category_id";

$result = mysqli_query( $conn, $read_query );

//var_dump( $result );

if( mysqli_num_rows( $result ) > 0 ) :

	?>
	<h1>Product List <span><a href="create.php" class="btn btn-info">Add New Product</a></span></h1>

	<form action="index.php" method="get" accept-charset="utf-8">
		<input type="text" name="filter" value='' placeholder="Enter Keyword">
		<input type="submit" name="submit" value="Apply">
	</form>

	<table style="margin-left: 50px" class="table table-striped">
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Image</td>			
			<td>download image</td>
			<td>Price</td>
			<td>Calories</td>
			<td>Category</td>
			<td>***</td>
			<td>soft delete</td>
		</tr>
		<?php
		$num = 1;
		while( $row = mysqli_fetch_assoc( $result ) ) :			
			?>
			<tr>
				<td><?= $num ++ ?></td>
				<td><?= $row['product_name']?></td>	
				<td>
					<?php if( !empty( $row['product_image'] ) ) : ?>
						<a href="download.php?id=<?= $row['product_id']?>" title="Click to download">
							<img src="<?= $row['product_image'] ?>" width="100">	
						</a>
					<?php endif; ?>
				</td>	
				<td>
					<?php if( !empty( $row['product_image'] ) ) : ?>
					
					<?php endif; ?>
				</td>
				<td><?= $row['product_price']?></td>	
				<td><?= $row['product_calories']?></td>	
				<td><?= $row['product_category_name']?></td>	
				<td><a href="update.php?id=<?= $row['product_id']?>" class="btn btn-warning">UPDATE</a></td>	
				<td><a href="soft_delete.php?id=<?= $row['product_id']?>">SOFT DELETE</a></td>	
				
			</tr>
			<?php
		endwhile;
		?>
	</table>

	<a href="recycle_bin.php">Recycle Bin</a>
	<?php
else :
	die('Query failed!' . mysqli_error($conn));
endif;
?>

