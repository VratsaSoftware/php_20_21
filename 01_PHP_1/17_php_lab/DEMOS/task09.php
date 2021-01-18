<?php 

// Декларирайте функция, при която от форма получаваме редица от числа
// разделени със запетая и интервал. Програма отпечатва таблица. В първата
// колона са отпечатани числата, във втората - сумата от цифрите на
// съответното число. Ако е подадена стойност, която не е число - в таблицата се
// отпечатва - “Не мога да сумирам”.

function print_nums( $str ){

	$arr = explode( ' ', $str );

	echo "<table border=1>";
		for( $i = 0; $i < count( $arr ); $i++ ){
			echo "<tr>";
			echo "<td>$arr[$i]</td>";
			
			$len = strlen( $arr[$i] );

			$current_str = $arr[$i];
			
			$sum = 0;

			if( !is_numeric( $current_str ) ){

				echo "<td>Не мога да сумирам</td>";	
				
			} else {

				for ( $j=0; $j < $len; $j++ ) { 
					$sum += $current_str[$j];
				}

				echo "<td>$sum</td>";
			}

			
			echo "</tr>";
		}
	echo "</table>";
}

// $input = "1 25 56 9656 258 7854 21";
$input = "1 25 56 aaa 9656 258 7854 21";

print_nums( $input );

