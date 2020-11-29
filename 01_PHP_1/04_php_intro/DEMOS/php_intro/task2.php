<?php 

    $a = 5;
    $b = 10;

    echo "A: " . $a . ' ';    
    echo "B: " . $b;

    // echo "<br>";

    $temp = $a;
    $a = $b;
    var_dump( $a );

    $b = $temp;

    var_dump( $b );

    echo "A: " . $a . ' ';

    echo "B: " . $b;