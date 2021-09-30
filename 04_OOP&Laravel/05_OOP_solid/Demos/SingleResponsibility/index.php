<?php 
include 'iFlatShape.php';
include 'i3DShape.php';
include 'Circle.php';
include 'Square.php';
include 'Cylinder.php';
include 'AreaCalculator.php';


$circle = new Circle(5);
$square = new Square(5);
$square2 = new Square(10);

$shapes = [$circle, $square, $square2];

$area_calculator = new AreaCalculator( $shapes );

// echo $area_calculator->output();

$cylinder = new Cylinder( 4, 10 );

var_dump($cylinder->calc_area());
var_dump($cylinder->calc_volume());
var_dump($cylinder->radius);
var_dump($cylinder->height);
