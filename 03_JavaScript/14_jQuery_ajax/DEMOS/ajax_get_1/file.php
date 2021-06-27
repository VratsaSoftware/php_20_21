<?php 
// var_dump( $_GET );

$arr = ['a' => '123456',
		'b' => '2536',
		'c' => '000',
		'd' => '25'
	];


$key = $_GET['search'];

$json = [];

$json['result'] = $arr[$key];
$json['message'] = 'Success!';

echo json_encode($json);
