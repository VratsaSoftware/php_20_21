<?php 

class Square implements iShape{

	public $length;

	public function __construct($length){

		$this->length = $length;
	}

	public function calc_area() {

 		return pow( $this->length, 2 );
 	}
}
