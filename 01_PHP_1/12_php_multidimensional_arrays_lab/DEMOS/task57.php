<?php 
$arr = [];
$rows = 4;
$cols = 4;

$num = 1;

for ($i=0; $i <$rows ; $i++) { 
	$arr[$i] = [];
	for ($j=0; $j < $cols; $j++) { 
		if( $i > $j ){
			$arr[$i][$j] = 0;
		} else {
			$arr[$i][$j] = $num;
			$num++;
		}		
	}
	$num = 1;
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