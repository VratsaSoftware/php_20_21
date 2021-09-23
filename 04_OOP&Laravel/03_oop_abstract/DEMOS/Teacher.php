<?php 

class Teacher extends Person {
	
	protected $speciality;
	protected $subjects = [];

	public function __construct( $sub ){
		$this->subjects = $sub;
	}

	public function redirect( $param ){
		//method logic	
	}

}