<?php 

$a = 110;
$b = 42;

// $a = 7;
// $b = 100;


function print_nums( $a, $b, $tag = 'p'){
	if( $a > $b ){
		for( $num = $a; $num >= $b; $num-- ){
			echo "<$tag> $num </$tag>";
		}
	}elseif( $a < $b ){
		for( $num = $a; $num <= $b; $num++ ){
			echo "<$tag> $num </$tag>";
		}
	}else{
		echo "<$tag> $a </$tag>";
		echo "<$tag> $b </$tag>";
	}
}

print_nums( $a, $b );
print_nums(11, 42);