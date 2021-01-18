<?php
$arr = [];
$rows = 4;
$cols = 5;
$number = 3;

for ($i = 0; $i < $rows; $i++){
   
    $arr[$i] = [];    

    for ($j = 0; $j < $cols; $j++){
        
        $arr[$i][$j] = $number;

        $number += 2;
    }

    $number = $number * 2 - 2;
}

echo "<table border='1'>";

for ($m = 0; $m < $rows; $m++){
    echo "<tr>";
    
    for ($k = 0; $k < $cols; $k++){
        echo "<td>";
        echo $arr[$m][$k];
        echo "</td>";
    }
    
    echo "</tr>";
}

echo "</table>";