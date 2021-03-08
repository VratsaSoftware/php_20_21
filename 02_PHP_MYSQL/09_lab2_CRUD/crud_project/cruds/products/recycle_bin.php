<?php 
include '../../includes/header.php';

//1
$read_query = "SELECT product_id, product_name, date_deleted FROM `products` WHERE `date_deleted` IS NOT NULL";

$result = mysqli_query($conn, $read_query);

if( mysqli_num_rows( $result ) ){
	
?>
<h2>Recycle Bin</h2>
	<table border="1">		
		<tr>
			<td>#</td>
			<td>Product</td>
			<td>Date</td>
			<td>Permanent Delete</td>
			<td>Restore</td>
		</tr>
		<?php 
		$num = 1;
		while( $row = mysqli_fetch_assoc($result)){
			?>
			<tr>
				<td><?= $num++ ?></td>
				<td><?= $row['product_name']?></td>
				<td><?= $row['date_deleted']?></td>
				<td><a href="delete.php?id=<?= $row['product_id']?>">Permanent Delete</a></td>
				<td><a href="restore.php?id=<?= $row['product_id']?>">Restore</a></td>
			</tr>
			<?php
		}

		?>
	</table>

<?php 

}

include '../../includes/footer.php';