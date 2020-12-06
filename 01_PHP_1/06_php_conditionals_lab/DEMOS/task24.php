<?php 
$weekday = 'Saturday';

switch ( $weekday ) {
	case 'Monday':		
	case 'Tuesday':		
	case 'Wednesday':		
	case 'Thirsday':		
	case 'Friday':
		echo 'Working day';
		break;
	case 'Saturday':		
	case 'Sunday':
		echo 'Not A Working day';
		break;
}