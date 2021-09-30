<?php 

class Cylinder extends Circle implements i3DShape {

	public $height;
	//public $radius;

	public function __construct( $h, $r ){
		
		parent::__construct( $r );
		
		$this->height = $h;
	}

	public function calc_area(){

 		return ( pi() * pow( $this->radius, 2 ) * 2 ) + $this->radius*$this->height;
	}


	public function calc_volume(){

		return pi() * pow( $this->radius, 2 ) * $this->height;
	}
}