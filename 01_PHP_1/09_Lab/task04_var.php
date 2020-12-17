<?php 

$a = -22;
$b = 14;

$a = -2;
$b = 10;

$a = 2;
$b = -10;

//две +  сумата е +
if( $a > 0 && $b > 0 ){
	echo "Greater than 0";
} elseif( $a < 0 && $b < 0 ){
// две - сумата е -
	echo "less than 0";
} else {
//+/-
// а -
	if( $a < 0 ){
		// abs($a) > abs($b) - сумата е -
		if( abs( $a ) > abs( $b ) ){
			echo "less than 0";
		} else {
			//abs($a) < abs($b) - сумата е +
			echo "greater than 0 ";
		}		
	} else {
		//ако б -
		if( abs( $b ) > abs( $a ) ){
			// абс(a) > abs(b) - сумата е +
			echo 'less than 0';
		} else {
			//абс(a) < abs(b) - сумата е -
			echo "greater than zero";
		}
	}
}




