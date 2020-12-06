<?php 

$i = '0';

if ($i == 0) {
 echo "i equals 0";
} elseif ($i == 1) {
 echo "i equals 1";
} elseif ($i == 2) {
 echo "i equals 2"; 
}

//i == false, влиза в случаите, които са false
switch ( $i ) {
	case $i == '0' :
		echo "i equals 0";		
		break;
	case $i == 1 :
		echo "i equals 1";	
		break;	
	case $i == 2 :
		echo "i equals 2";
		break;
	
	default:
		echo "not 0, 1, 2";
		break;
}

//i == 0
switch ( true ) {
	case $i == '0' :
		echo "i equals 0";		
		break;
	case $i == 1 :
		echo "i equals 1";	
		break;	
	case $i == 2 :
		echo "i equals 2";
		break;
	
	default:
		echo "not 0, 1, 2";
		break;
}

$i = 0;
$i = '0';

switch ( $i ) {
	case 0 :
		echo "i equals 0";		
		break;
	case 1 :
		echo "i equals 1";	
		break;	
	case 2 :
		echo "i equals 2";
		break;
	
	default:
		echo "not 0, 1, 2";
		break;
}

