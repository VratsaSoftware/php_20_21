<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'recipes';

$connection = mysqli_connect($server,$username,$password,$database);

if(!$connection){
	die('Connection failed! '.mysqli_connect_error().' Error Number: '.mysqli_connect_errno());
}
else{
	echo " 'Successfully connected to DB!";
}