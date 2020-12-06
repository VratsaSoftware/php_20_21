<?php 

echo "8. Сравняване на числа </br><p></p>";

$numOne = 4;
$numTwo = 19;
$numThree = 10;

if($numOne >= $numTwo && $numOne >= $numThree ) {
    if( $numTwo >= $numThree) {
        echo $numOne . " " . $numTwo . " " . $numThree;
    }else{
        echo $numOne . " " . $numThree . " " . $numTwo;
    };
}elseif($numTwo >= $numOne && $numTwo >= $numThree) {
    if($numOne >= $numThree) {
        echo $numTwo . " " . $numOne . " " . $numThree;
    }else{
        echo $numTwo . " " . $numThree . " " . $numOne;
    }
}elseif($numThree >= $numOne && $numThree >= $numTwo) {
    if($numOne >= $numTwo) {
        echo $numThree . " " . $numOne . " " . $numTwo;
    }else{
        echo $numThree . " " . $numTwo . " " . $numOne;
    }
}