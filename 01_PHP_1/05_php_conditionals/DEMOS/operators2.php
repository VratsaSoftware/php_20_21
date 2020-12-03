<?php 
//ако числото се е четно и се дели на 5 - X is even and is divisible to 5
//ако числото е нечетно и се дели на 5 - X is odd and is divisible to 5
//x is odd and....
$a = 666995;

//echo $a % 5;


if(( ( $a % 2 ) == 0 ) && ( ( $a % 5 ) == 0 )){
	echo $a . ' is even and is divisible to 5';
}elseif( ( $a % 2 != 0) && (( $a % 5 ) == 0 )){
	echo $a . ' is odd and is divisible to 5';
} else {
	echo $a . ' is not odd and is not divisible to 5';
}

