<?php 

$countries = [
	'BG' => [
		'name' => 'Bulgaria',
		'capital' => 'Sofia',
		'population' => 7000000,

	],
	'IT' => [
		'name' => 'Italy',
		'capital' => 'Rome',	
		'biggest_cities' => [
			'Milano',
			'Venezia'
		]	
	],
	'US' => [
		'name' => 'USA',
		'capital' => 'Washington',
	],
];

$countries['IT']['capital'];
$countries['US']['name'];
$countries['IT']['biggest_cities'][1];