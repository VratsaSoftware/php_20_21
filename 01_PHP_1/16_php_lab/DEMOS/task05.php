<?php
$arr = [0, 2, 7000, 200, 400, 15, 10, 25, 45, 200, 1000];

function the_biggest_element($input){
	$result = [];
    $result['max'] = $input[0];
    $result['max_ind'] = 0;
    $result['min'] = $input[0];
    $result['min_ind'] = 0;


    for($i = 1; $i < count($input); $i++){

        if ( $result['max'] < $input[$i] ){            
            $result['max'] = $input[$i];
            $result['max_ind'] = $i;
        }

        if( $result['min'] > $input[$i] ){
        	$result['min'] = $input[$i];
        	$result['min_ind'] = $i;
        }

    }

    return $result;
}

echo the_biggest_element($arr);