<?php 
function are_increasing_numbers( $arr ){

	$count = count( $arr );

	$token = 1;

	$max_length = 1;

	for( $i = 1; $i < $count; $i++ ){
		
		if( $arr[$i] > $arr[$i-1] ){
			
			$token++;
		
		} else {

			if( $token > $max_length ){

				$max_length = $token;

			}
			 
			$token = 1;

		}
	}

	// echo 'token - ' . $token;
	// echo "<br>";

	if( $token > $max_length ){

		$max_length = $token;

	}

	// return 'max-length - ' . $max_length;
	echo 'max-length - ' . $max_length;

}

$input = [ 100, 2, 8, 9, 3, 6, 8, 14, 25, 89, 2];

// $var = are_increasing_numbers( $input );
// echo $var;

are_increasing_numbers( $input );

