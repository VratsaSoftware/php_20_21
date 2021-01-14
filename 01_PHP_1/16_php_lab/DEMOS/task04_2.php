
<?php 
$n = 5;

for( $i = 0; $i <= $n; $i++ ){
	for ($j = 1; $j <= $n - $i; $j++) { 
		//j = 1, 2, 3 , 4, 5
		echo '_ ';
	}
	for( $k = 0; $k < ( 2*$i + 1 ); $k++){
		echo '0 ';
	}
	for ($m = 1; $m <= $n - $i; $m++) { 
		//j = 1, 2, 3 , 4, 5
		echo '_ ';
	}
	
	echo "<br>";
}