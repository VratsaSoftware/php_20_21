<?php 

// $arr = ['name' => 'Peter', 'age' => 32, 'city' => 'Vratsa'];

// $json_string = json_encode( $arr );

// echo $json_string;

// $arr_multidim = [
// 			['name' => 'Peter', 'age' => 32, 'city' => 'Vratsa'],
// 			['name' => 'Peter', 'age' => 32, 'city' => 'Vratsa'],
// 			['name' => 'Peter', 'age' => 32, 'city' => 'Vratsa']
// 		];

// echo json_encode( $arr_multidim );

// var_dump( json_encode( $arr_multidim ) );

$assoc_multid = [
	'student1' => [
		'name' => 'Peter', 'age' => 32, 'city' => 'Vratsa'
	],
	'student2' => [
		'name' => 'George', 'age' => 33, 'city' => 'London'
	]
];


var_dump( json_encode($assoc_multid) );

echo json_encode($assoc_multid);