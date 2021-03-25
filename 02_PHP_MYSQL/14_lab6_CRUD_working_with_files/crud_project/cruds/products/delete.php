<?php 
include '../../includes/db_connect.php';
$product_id = $_GET['id'];
// //find the product image
$read_query = "SELECT `product_image` FROM `products` WHERE `product_id`=" . $product_id . " LIMIT 1";
// // var_dump( $read_query );


$result = mysqli_query( $conn, $read_query );
if( $result ){
	$product_image = mysqli_fetch_assoc($result);	
}

//delete product image
unlink($product_image['product_image']);


$delete_query = "DELETE FROM products WHERE product_id=". $product_id . " LIMIT 1";

$delete_res = mysqli_query( $conn, $delete_query );

if( $delete_res ){
	header('Location: recycle_bin.php');
} else {
	die('Deletion failed'.mysqli_error($conn));
}