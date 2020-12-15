<?php 

//a b c
$a = 55;
$b = 25;
$c = 31;
// a = b && b = c && c = a
// a = b || b = c || c = a
//

if( $a == $b && $b == $c && $c == $a){
	echo "равностранен";
} elseif( $a == $b || $b == $c || $c == $a ){
	echo "равнобедрен";
} else {
	echo 'разностранен';
}