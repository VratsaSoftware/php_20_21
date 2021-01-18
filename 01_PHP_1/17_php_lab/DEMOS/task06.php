<?php

function max_min_string( $str ){
	
	$max_len = $str[0];
	$min_len = $str[0];
	
	for ( $i=1; $i < count($str) ; $i++) { 
		
		if ( strlen( $max_len ) < strlen( $str[$i] ) ) {
			
			$max_len = $str[$i];

		} 

	}

	for ( $i=1; $i < count($str) ; $i++) { 

		if ( strlen($min_len) > strlen($str[$i]) ) {
			
			$min_len = $str[$i];

		} 

	}	
	
	echo "Max str lenght is: " . $max_len;
	
	echo "<br>";
	
	echo  "Min str lenght is: " . $min_len;
}

$arr = ['a', 'abc', 'abcd',];

max_min_string($arr);