<?php 
session_start();


if( !isset( $_SESSION['sum'] ) ){
	
	$_SESSION['sum'] = 0;

} 
// $sum = 0;
$num = $_POST['num'];

$_SESSION['sum'] += $num;

header('Location: index.php');