<?php 

// $assoc_arr = [];
$assoc_arr = [
	'name' => 'Pesho',
	'age'  => 25,
	'address' => 'Vratsa',
	'married' => 'false',
];


echo "<table border=1>";
echo "<tr>";
echo "<td> name </td>";
echo "<td>{$assoc_arr['name']}</td>";
echo "</tr>";

echo "<tr>";
echo "<td> age </td>";
echo "<td>{$assoc_arr['age']}</td>";
echo "</tr>";

echo "<tr>";
echo "<td> address </td>";
echo "<td>" . $assoc_arr['address'] ."</td>";
echo "</tr>";

echo "<tr>";
echo "<td> Is married </td>";
echo "<td>" . $assoc_arr['married'] ."</td>";
echo "</tr>";

echo "</table>";
