<?php 


//go to school 0-18
//go to work - 19-65
//not avalid age - < 0
//reture  - > 66

$age = 10;
$age = 25;
// $age = -5;
// $age = 69;

switch ( true ) {
	case ($age >= 0 && $age <= 18):
		echo "go to school";
		break;
	case ($age >= 19 && $age <= 65):
		echo "go to work";
		break;
	case ($age >= 66 ):
		echo "retire";
		break;
	
	default:
		echo "not a valid age";
		break;
}