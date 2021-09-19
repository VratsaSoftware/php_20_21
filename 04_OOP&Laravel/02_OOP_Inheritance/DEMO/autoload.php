<?php

spl_autoload_register( function($class){
	require('App/'.$class.'.php');
});