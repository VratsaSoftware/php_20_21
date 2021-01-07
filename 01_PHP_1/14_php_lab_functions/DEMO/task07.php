<?php

/**
 * @param $array
 * @return string
 */

function indexOfElement( $array ): string {
    $flag = false;
    $idx = 0;    

    $count = count($array);

   //count( $array ) > 2

    if( $array[0] > $array[1] && $array[0] > $array[$count-1]){
        $flag = true;
    } 
    //$flag == true ? 
        //if
    for ($i = 1; $i < $count - 1; $i++) {
        if ($array[$i] > $array[$i - 1] && $array[$i] > $array[$i + 1]) {
            $flag = true;
            $idx = $i;
            return $idx;
        }
    }    

    //if last element is bigger than its neighbours

    if ($flag){
        return $idx;
    } else {
        return 'no such element';
    }
}

$arr = [2,11,2,3,0,2];
//$arr = [0,4,7,0,0,0];
//$arr = [4,15,27,33,1];
//$arr = [1,1,1,1];//$arr = [27,22,11,4];
//$arr = [25,3,2,22,28];$result = indexOfElement($arr);
echo $result;