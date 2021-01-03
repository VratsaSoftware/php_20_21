<?php 
// include 'assets/functions.php';

function print_hello_world( $tag ){
	echo "<$tag>";
	echo "Hello world!";
	echo "</$tag>";

}

print_hello_world( 'h1' );


print_hello_world( 'h2' );


print_hello_world( 'h3' );

$t = 'h4';

print_hello_world( $t );

// print_hello_world();

// print_hello_world();