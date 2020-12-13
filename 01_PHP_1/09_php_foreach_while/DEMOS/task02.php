<?php 

$arr = ['', 102, 88];

$max= $arr[0];
$flag = true;	if(isset($arr)){
	if(empty($arr)){
		echo "Not a valid input";
	}else{
		foreach ($arr as $value){
			var_dump( $value );
			var_dump( is_numeric($value) );
		if( is_numeric( $value ) ){
			if($max < $value){
				$max = $value;
			}
		} else {
			$flag=false;
			break;	
		}
	}
	if($flag == true){
		echo $max;
	}else{
		echo "Not a valid inpt";
	}
	}
}
