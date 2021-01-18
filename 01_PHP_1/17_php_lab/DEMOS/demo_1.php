<?php 

$n = 42;

for( $i = 2; $i <= $n/2; $i++ ){
	if( $n % $i == 0 ){
		echo $n . ' is divisible to ' . $i;
		echo "<br>"; 
	}
}