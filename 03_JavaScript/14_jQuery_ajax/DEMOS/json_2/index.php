<?php 

$json_str = '{"student1":{"name":"Peter","age":32,"city":"Vratsa"},"student2":{"name":"George","age":33,"city":"London"}}';


echo $json_str;

$arr = json_decode( $json_str, true );

echo '<pre>';
var_dump( $arr );
echo '</pre>';