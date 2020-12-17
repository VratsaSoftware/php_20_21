<?php 


$arr = [1, 2, 5, 7, 'rt', true];

$arr[55] = 'test';
$arr[] = 'test25';

var_dump($arr);

 // $arr = ['0' => 'test0',
	// 	'1' => 'test',
	// 	'2' => 'test1',
	// 	'3' => 'test3'];
// echo $arr[3];

// echo $arr[5];

$count = count( $arr );
// //6 5

// for( $i = 0; $i < $count; $i++ ){
// 	echo $arr[$i] . ' ';
// }


foreach( $arr as $ind=>$val ){
	echo $ind . '=>' .$val . '<br>';
}

