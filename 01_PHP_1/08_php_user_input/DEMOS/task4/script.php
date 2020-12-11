<?php 
	if( isset($_POST['angle_a']) && isset($_POST['angle_b']) && isset($_POST['angle_c']) ) {
		$a = $_POST['angle_a'];
		$b = $_POST['angle_b'];
		$c = $_POST['angle_c'];

		if( $a == 0 || $b == 0 || $c == 0 ){
			echo "Not a valid triangle";
		} else {
			if( ( $a + $b + $c ) == 180 ){
				echo "Valid triangle";
			} else {
				echo "Not a valid triangle!";
			}
		}
	}