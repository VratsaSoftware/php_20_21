<?php 

include '../../includes/db_connect.php';

$product_id = $_GET['id'];

//find the product image
$read_query = "SELECT `product_image` FROM `products` WHERE `product_id`=" . $product_id . " LIMIT 1";
// var_dump( $read_query );
$result = mysqli_query( $conn, $read_query );
if( $result ){
	$product_image = mysqli_fetch_assoc($result);	
}

header("Content-Description: File Transfer");
header("Content-Type: image/jpeg");
header("Content-Disposition: attachment; filename=". basename( $product_image['product_image'] ) );
header("Expires: 0");
header("Cache-Control: must-revalidate");
header("Pragma: public");
header("Content-Length: ". filesize($product_image['product_image']));
ob_clean();
flush();
readFile( $product_image['product_image'] );