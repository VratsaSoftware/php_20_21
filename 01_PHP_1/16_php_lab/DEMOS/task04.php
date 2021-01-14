<?php

function print_triangle($input){

    for ($i = 1; $i <= $input; $i++){

        for ($j = 0; $j < $i; $j++){
            echo 'a ';
        }
        echo "</br>";
    }
}


$n = 7;
print_triangle($n);