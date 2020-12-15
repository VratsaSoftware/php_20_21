<?php 

//go to school 0-18
//go to work - 19-65
//not avalid age - < 0
//reture  - > 66

$age = 10;
$age = 25;
// $age = -5;
// $age = 69;

if( $age >= 0 && $age <= 18){
	echo "go to school";
}

if( $age >= 19 && $age <= 65 ){
	echo "go to work";
}

if( $age < 0 ){
	echo " not a valid age";
}

if( $age >= 66 ){
	echo " reture";
}

