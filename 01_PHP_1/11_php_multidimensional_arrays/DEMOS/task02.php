<?php
$students = [
    [
        'firstname' => 'Peter 1',
        'surname' => 'Petrov 1',
        'lastname' => 'Aleksandrov 1',
        'mark_1' => '6',
        'mark_2' => '4',
        'mark_3' => '5',
        'mark_4' => '3',
    ],
    [
        'firstname' => 'Peter 2',
        'surname' => 'Petrov 2',
        'lastname' => 'Aleksandrov 2',
        'mark_1' => '4',
        'mark_2' => '4',
        'mark_3' => '4',
        'mark_4' => '4',
    ],
    [
        'firstname' => 'Peter 3',
        'surname' => 'Petrov 3',
        'lastname' => 'Aleksandrov 3',
        'mark_1' => '3',
        'mark_2' => '3',
        'mark_3' => '3',
        'mark_4' => '3',
    ],
    [
        'firstname' => 'Peter 4',
        'surname' => 'Petrov 4',
        'lastname' => 'Aleksandrov 4',
        'mark_1' => '5',
        'mark_2' => '5',
        'mark_3' => '5',
        'mark_4' => '5',
    ],
    [
        'firstname' => 'Peter 5',
        'surname' => 'Petrov 5',
        'lastname' => 'Aleksandrov 5',
        'mark_1' => '6',
        'mark_2' => '6',
        'mark_3' => '6',
        'mark_4' => '6',
    ],
];

echo "<table border='1'>";

$sum = 0;
$counter = 0;
$sum_cars = [];
foreach ($students as $key => $value) {    
    echo "<thead>";    
    echo "<tr>";    
    
    foreach ($value as $inner_key => $inner_value) {
        echo "<th>";
        echo "$inner_key";
        echo "</th>";
    }    

    echo "</tr>";
    
    echo "</thead>";    
    break;
}
echo "<tbody>";  

foreach ( $students as $key => $value ) {    
    
    echo "<tr>";
    foreach ($value as $inner_key => $inner_value) {
        echo "<td>";
        echo "$inner_value";
        echo "</td>";
    }
    echo "</tr>";   
}

echo "</tbody>";
echo "</table>";