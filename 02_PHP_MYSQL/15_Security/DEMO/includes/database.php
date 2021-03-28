<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'contact_form';

// old way
// $connection = mysqli_connect($server,$username,$password,$database);

//new way - mysqli OOP style with prepared statements:
$connection = new mysqli($server,$username,$password,$database);

if($connection->connect_error){
	die('Connection failed! '.$connection->connect_error);
}
else{
	echo " 'Successfully connected to DB!";
}