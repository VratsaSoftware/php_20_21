<?php 
//register data
$password = '  123456   ';
$username = 'Gosho';

$trimmed_password = trim( $password );
$trimmed_username = trim( $username );

// $hashed_password = password_hash( $password, PASSWORD_DEFAULT );
$hashed_password = password_hash( $trimmed_password, PASSWORD_DEFAULT );

// echo $hashed_password;

//login data
$password = '123456';
$username = 'Gosho';

$trimmed_password = trim( $password );
$trimmed_username = trim( $username );

//database 
$db_password = '$2y$10$5o7fo9z1k2V39bdpZ3.hu.DdcyuoJ.V0tX4AUlnW6FaB/yytHyEni';

// if( $password == $db_password ){
// 	echo 'Gosho it is!';
// } else {
// 	echo 'Not Gosho!';
// }

if( password_verify( $trimmed_password, $db_password ) ){
	echo 'Gosho it is!';
} else {
	echo 'Not Gosho!';
}