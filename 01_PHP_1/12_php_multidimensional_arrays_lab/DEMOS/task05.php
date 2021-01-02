<?php 


$arr = [];

$rows = 4;
$cols = 6;
$num = 1;
$num = 'a';


for( $i = 0; $i < $rows; $i++ ){
	$arr[$i] = [];
	
	for( $j = 0; $j < $cols; $j++ ){
	//	[1,2,3,4,5,6]
	//	[18,... 24]
	//[72,.....]
		//
		$arr[$i][$j] = $num;
		$num++;

	}

	//7 (num - 1) *3
	//num = 13
	//num = 19
}

// echo "<pre>";
// var_dump( $arr );
// echo "</pre>";

echo "<table border='1'>";

for( $m = 0; $m < $rows; $m++ ){
	echo "<tr>";
	for( $k = 0; $k < $cols; $k++ ){
		echo "<td>";
		echo $arr[$m][$k];
		echo "</td>";
	}
	echo "</tr>";
}

echo "</table>";
