<?php 

$arr = [1, 2, 3, 0, 4, 10, 10];
// $arr = [1, 2, 'name', 4, 10, 10];
//$arr = [0, 1, 3, 7, 23];
// $arr = ['name', 7, 8];

$n = 2;

foreach( $arr as $ind => $value ){
	if( $value == 0 ){
		continue;
	}
	echo 'value = ' . $value . '</br>';
	// if( is_numeric( $ind ) && is_numeric( $value ) ){
	// 	if( $value > $n ){
	// 		echo $ind * $value;
	// 	}
	// }
}