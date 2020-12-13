<?php 

// . Напишете програма, която отпечатва числата от 1 до n, 
//които се делят на 3 и 7
// едновременно. Въвеждайте n с форма

$n = 10;
$num = 1;
$flag = false;

while( $num <= $n ){
	if( ($num % 3 == 0) && ($num % 7 == 0) ){
		
		echo $num . ' ';
		$flag = true;

	} 
	$num++;
	// $num = $num + 1;	// $num += 1;
	// $num = $num + 5;	// $num += 5;
	// $num--; 	// $num = $num - 1;	// $num -= 1;
	//$num = $num - 5;	//$num -= 5;
}

if( $flag == false ){
	echo 'No such numbers';
}