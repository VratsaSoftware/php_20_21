<?php 
// include 'assets/functions.php';

function print_smth( $tag, $str ){
	echo "<$tag>";
	echo "$str";
	echo "</$tag>";

}

print_smth( 'h1', 'Something' );


print_smth( 'h2', 'Something 2' );


print_smth( 'h3', 'Something' );

$t = 'h4';
$p = 'Second parameter!';

print_smth( $t, $p );

// print_smth();

// print_smth();