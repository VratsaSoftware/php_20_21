<?php 

if( isset( $_POST['username'] ) ){
	
	$username = $_POST['username'];
	echo "Hello, " . $username . '!';
}