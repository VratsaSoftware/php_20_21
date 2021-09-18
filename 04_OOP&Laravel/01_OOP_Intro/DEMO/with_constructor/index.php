<?php 

include 'Car.php';

$car = new Car('blue');

$car->display_car_color();

//echo $car->color;

$car->change_car_color('red');
$car->display_car_color();
//echo $car->color;


