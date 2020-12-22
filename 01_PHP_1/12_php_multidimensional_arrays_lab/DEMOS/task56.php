<?php 

$arr = [];
$rows = 5;
$cols = 5;

$num = 1;
$f = 4;
$val = '';

for ($i = 0; $i < $rows; $i++) { 
	$arr[$i] = [];
	for( $j = 0; $j < $cols; $j++ ){
		$arr[$i][$j] = $val . $num;//''.1
		$val = $f;
		$f = $f . 4;
	}

	$num++;
	$val = '';
	$f = 4;
}

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