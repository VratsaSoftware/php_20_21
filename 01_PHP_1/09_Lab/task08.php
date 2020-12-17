<?php 

$a = 10;
$b = 15;
$c = 2;

a < b c 
c a < b

a c < b 
c < b a

b < c  a 

b a c 

if( $a < $b && $a < $c ){
	//a най-малкото
	if( $b < $c ){
		echo "$a < $b < $c";
	} else {
		echo "$a < $c < $b";
	}
} elseif( $b < $a && $b < $c ){
	if( $a < $c ){
		echo "$b < $a < $c";
	} else {
		echo "$b < $c < $a";
	}
} else {
	//$c 
	if( $a < $b ){
		echo "$c < $a < $b";
	} else {
		echo "$c < $b < $a";
	}
}
 



