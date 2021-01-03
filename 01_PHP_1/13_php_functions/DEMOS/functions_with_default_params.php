<?php 
// include 'includes/functions.php';

function print_smth( $tag, $str, $color = '#F78409', $sign = '!'  ){
	echo "<$tag style='color:" . $color ."'>";
	echo $str . $sign;
	echo "</$tag>";

}

print_smth( 'h1', 'Something', 'red' );


print_smth( 'h2', 'Something 2', 'blue' );


print_smth( 'h3', 'Something', '#ccc' );

$t = 'h4';
$p = 'Second parameter!';
$c = '#25F30A'; 

print_smth( $t, $p, $c );

$t1 = 'h5';
$p1 = 700;

print_smth( $t1, $p1, '?' );

// print_smth();