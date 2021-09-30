<?php 

class AreaCalculator {
	
	protected $shapes;
	
	public function __construct($shapes = []) {

		$this->shapes = $shapes;
	}
	
	public function sum() {
		 // logic to calculate and sum the areas
		$area = [];

		foreach($this->shapes as $shape) {
			
			if( is_a( $shape, 'iShape' ) ){
				
				$area[] = $shape->calc_area();
			}
		}

		return array_sum($area);
	}

	public function output() {
		
		return "Sum of the areas of provided shapes: ". $this->sum();
	}
}