<?php 
$car1 = 'Volvo';
$car2 = 'BMW';
$cars = 'Mercedes';

$arr = [
	'Volvo',
	'BMW',
	'Mercedes',
];

$car1 = [
	'brand' => 'Volvo',
	'model' => 'V50',
	'year_of_production' => '2004',
	'price' => 5000,
];

$car2 = [
	'brand' => 'BMW',
	'model' => 'M5',
	'year_of_production' => 2010,
	'price' => 50000,
];

$car3 = [
	'brand' => 'Mercedes',
	'model' => 'E63',
	'year_of_production' => 2010,
	'price' => 50000,
];

$cars = [
	//[0]
	[
		'brand' => 'Volvo',
		'model' => 'V50',
		'year_of_production' => '2004',
		'price' => 5000,
		'cars_sold' => 5000
	],
	//[1]
	[
		'brand' => 'BMW',
		'model' => 'M5',
		'year_of_production' => 2010,
		'price' => 50000,
		'cars_sold' => 1000000
	],
	//[2]
	[
		'brand' => 'Mercedes',
		'model' => 'E63',
		'year_of_production' => 2010,
		'price' => 50000,
		'cars_sold' => 20000
	]
];

echo $cars[1]['model'];

echo $cars[2]['year_of_production'];