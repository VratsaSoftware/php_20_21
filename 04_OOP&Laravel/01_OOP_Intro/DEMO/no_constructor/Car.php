<?php 

Class Car {
	public $color;

	public function set_color( $color ){
		$this->color = $color;
	}

	public function display_car_color(){
		echo $this->color;
	}
}