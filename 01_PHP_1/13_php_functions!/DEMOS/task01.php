<?php 

$a = 10;
$b = 15;

// $sum = $a + $b;

// echo $sum;

function sum( $a, $b ){
	$sum = $a + $b;
	echo $sum;
}

// sum($a, $b);

function sum_with_return( $a, $b ){
	$sum = $a + $b;

	return $sum;
}

echo sum_with_return( $a, $b );

$var = sum_with_return( $a, $b );

var_dump( $var );