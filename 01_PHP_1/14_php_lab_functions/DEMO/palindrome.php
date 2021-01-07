<?php 

$input = 'abba';

// $input = 'test test';

function is_palindrome( $par ){

	//$length = strlen( $input );
	$arr = str_split( $par );
	$count = count( $arr );
	$flag = true;

	for ($i = 0; $i < $count/2; $i ++) { 
		$ind = $count-1-$i;
			if( $arr[$i] != $arr[$ind]){
				$flag = false;
				break;
			}
		}

		if( $flag ){
			echo 'yes';
		} else {
			echo 'no';
		}
}


is_palindrome( $input );

