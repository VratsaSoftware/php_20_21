<?php 


$arr = ['demo'=>'10'];

//var_dump(isset( $arr['demo'] ));

if( isset( $arr['demo'] ) ){
	//var_dump(!empty( $arr['demo'] ));
	if( !empty( $arr['demo'] ) ){
		echo 'set and empty';
	} else {
		echo 'set and NOT empty';
	}
} else {
	echo 'not set';
}