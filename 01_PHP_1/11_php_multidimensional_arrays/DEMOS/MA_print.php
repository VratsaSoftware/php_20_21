<?php 

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
$num = 1;

foreach ( $cars as $key => $car ) {
	// echo "<pre>";
	// var_dump($car);
	// echo "</pre>";
	// echo "car " . $num++ ."<br>";
	foreach ($car as $key => $value) {
		echo $value . '<br>';
	}
}

$count = count( $cars );

for( $i = 0; $i < $count; $i++ ){
	// echo "<pre>";
	// var_dump($cars[$i]);
	// echo "</pre>";
	echo "car " . $i ."<br>";

	foreach ($cars[$i] as $key => $value) {
		echo $value . '<br>';
	}
}
