<?php 

//17.Да се отпечатат числата от 1 до 300 
//като отпечатваме по 10 числа на ред.

$check = 1;
for( $i = 1; $i <= 300; $i++ ){
	// echo $check . ' ';	
	echo $i . ' '; 
	
	if( $check == 10 ){
		echo '<br>';
		$check = 0;
	}
	$check++;
}