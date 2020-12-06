<?php 
$num = -14;
$check= "";
// echo $check;

if ( $num != 0 ) {
	
	if($num % 3 === 0) {
	    $check = $check . '3, ';
	}
	// echo $check;
	if($num % 5 === 0) {
	    $check = $check . '5, ';
	}
	// echo $check;
	if ($num % 7 === 0) {
	    $check = $check . '7, ';
	}

	if( $check == ''){
		echo 'Числото не се дели на 3, 5 или 7';
	} else {
		echo $check;
	}	

} else {
	 echo 'not a valid entry';
}



