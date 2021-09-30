<?php 
include 'iShape.php';
include 'Circle.php';
include 'Square.php';
include 'AreaCalculator.php';


$circle = new Circle(5);
$square = new Square(5);
$square2 = new Square(10);

$shapes = [$circle, $square, $square2];

$area_calculator = new AreaCalculator( $shapes );

echo $area_calculator->output();