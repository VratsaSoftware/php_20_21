<?php 

$a = 10;

// var_dump($a !== '10');

// var_dump($a >= '10');
// var_dump($a <= '10');

// echo gettype($a);

echo gettype(strval( $a ));

$a = strval( $a );

echo gettype( $a );
$b = 'aaaaaa';
echo ($a+$b);