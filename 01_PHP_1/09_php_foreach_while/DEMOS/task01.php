<?php 

$arr = [1, 2, 3, 4, 10, 10];
// $arr = [1, 2, 'name', 4, 10, 10];
//$arr = [0, 1, 3, 7, 23];
// $arr = ['name', 7, 8];

$m = 1;
$flag = true;
// $m = $m*1;
// $m = $m*2;
// $m = $m*3;
// $m = $m*4;
//is_numeric( $value )

if( isset( $arr ) ){
	if( empty( $arr ) ){
		echo 'Not a valid input';
	} else {
		foreach( $arr as $value ){	
			//echo $value;
			if( is_numeric( $value ) ){
				$m = $m * $value;	
			} else {
				// echo 'Not a valid input';
				$flag = false;
				break;
			}
		}//endforeach

		if( $flag == true ){
			echo $m;
		} else {
			echo 'Not a valid input';
		}		
	}	
}