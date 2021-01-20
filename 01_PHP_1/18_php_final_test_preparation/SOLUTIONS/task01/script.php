<?php 

if( !empty( $_POST['fuel'] ) ){
	
	$fuel = $_POST['fuel'];
	$condition = $_POST['conditions'];
	
	switch ( $condition ) {
		case 'snow':
			echo $fuel * 1.05;
			break;
		case 'traffic_jam':
			echo $fuel*1.5;
			break;
		case 'complicated_row':
			echo $fuel*1.2;
			break;
		case 'highway':
			echo $fuel*0.9;
			break;		
	}
} else {
	echo 'Please enter fuel!';
}