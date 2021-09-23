<?php 

$literature = new Subject();
$math = new Subject();
$art = new Subject();

$subjects1 = [$literature, $art];
$teacher1 = new Teacher([$literature, $art]);

$subjects2 = [$math];
$teacher2 = new Teacher( $subjects2 );