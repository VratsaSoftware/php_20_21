<?php 
$arr_assoc = [
		'gosho' => '123456789',
		'pesho' => '125823697',
		'ivan'  => '852366541',
		'gosho1' => '123456789',
		'pesho1' => '125823697',
		'ivan1'  => '852366541',
		'gosho2' => '123456789',
		'pesho2' => '125823697',
		'ivan2'  => '852366541',
		'gosho3' => '123456789',
		'pesho3' => '125823697',
		'ivan3'  => '852366541',
	];

		// echo $arr_assoc['gosho'];
		// echo $arr_assoc['pesho'];


$arr = ['125253-362', '521-5896', '8996621'];


foreach( $arr_assoc as $key => $value ){
	echo 'Name: ' . $key . ' - telephone: ' . $value . '</br>';
}

foreach( $arr_assoc as $name => $phone ){
	echo 'Name: ' . $name . ' - telephone: ' . $phone . '</br>';
}

foreach( $arr_assoc as $phone ){
	echo ' - telephone: ' . $phone . '</br>';
}




// foreach( $arr as $key => $value ){
// 	echo 'Num: ' . $key . ' - telephone: ' . $value . '</br>';
// }

