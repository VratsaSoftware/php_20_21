<?php 

class Car {
	public $color;

	public function __construct( $c ){
		$this->color = $c;
	}

	public function change_color( $p ){
		$this->color = $p;
	}

	public function display_car_color(){
		echo $this->color;
	}
}