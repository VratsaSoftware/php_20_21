<?php 

//a b c
// a > 0 b > 0 c > 0
//a + b > c
//c + b > a
//a + c > b

$a = 25;
$b = 20; 
$c = 40;

if( $a > 0 && $b > 0 && $c > 0 ){
	if( ($a + $b > $c) && ($c + $b > $a) && ($a + $c > $b) ){
		echo "valid";
	} else {
		echo "not a valid";
	}
} else {
	echo "not a valid";
}