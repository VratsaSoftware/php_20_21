<?php
// $m = 2, $n = 3;
// $arr = [[5, 14, 2], [20, 9, 4]];
$m = 3;
$n = 4;
$arr = [
	[4, 5, 6, 7],
	[4, 5, 8, 10, 11],
	[1, 5, 25, 1, 2, 69],
];

// $a = [[5, 14, 2], [20, 9, 4]] 

function output( $arr ){
   
    $outer_count =  count($arr);

    for ( $i = 0; $i < $outer_count; $i++){
    	//$arr[$i]
    	$inner_count = count( $arr[$i] );

        for ( $j = 0; $j < $inner_count; $j++ ){
            echo "[$i] [$j] = " . $arr[$i][$j] . ' / ';
        }
        echo "<br>";
    }
}

output( $arr );