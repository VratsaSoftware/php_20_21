<?php 

abstract class Person {

	protected $name;
	protected $phone;
	
	public function get_human(){

	}

	public function edit_human_data(){

	}

	abstract function redirect( $param );
}