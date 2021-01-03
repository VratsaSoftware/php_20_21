<?php


function sum_arrays_elements( $m = [], $n = [] ){

    $result = [];
    if ( count($m) > count($n) ){
        for ($i = 0; $i < count($n); $i++){
            $m[$i] = $m[$i] + $n[$i];
        }
       $result = $m;
    }else{
        for ($i = 0; $i < count($m); $i++){
            $n[$i] = $m[$i] + $n[$i];
        }
        $result = $n;
    }
    echo '[';
    $count = count( $result );
    for ($j=0; $j < $count ; $j++) { 
        echo $result[$j] . ', ';
    }
    echo ']';
    
}

$arr1 = [2, 11, 2, 3, 0, 2];
$arr2 = [0, 4, 7, 0, 1];

$arr1 = [];
$arr2 = [];

sum_arrays_elements( $arr1, $arr2 );

// echo "<pre>";
// var_dump( $arr1 );
// echo "</pre>";
// echo "<pre>";
// var_dump( $arr2 );
// echo "</pre>";
// echo "<pre>";
// var_dump( $result );
// echo "</pre>";

// for ($i = 0; $i < count($result); $i++){
//     echo "[$result[$i]], ";
// }