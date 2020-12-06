<?php 

//3 angles ? valid triangle

//declare 3 variables
$a = 60;
$b = 60;
$c = 60;


//проверяваме дали трите променливи са по-големи от 0
if( $a > 0 && $b > 0 && $c > 0 ){
//4th variable - sum of previous 3
	$sum = $a + $b + $c;

	//проверяваме 4тото променлива дали е по-голяма от 0
	if ( $sum == 180 ) {
		echo "yes";
	} else {
		echo "nope";
	}//end if sum == 180

} else {
	echo "Невалиден триъгълник";
}//end if a, b, c > 0

