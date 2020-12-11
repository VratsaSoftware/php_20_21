<?php 
	if( !isset( $_POST['submit'] ) ){
?>
<form action="" method="post">
	<p>Angle A</p>
	<input type="text" name="angle_a">
	<p>Angle B</p>
	<input type="text" name="angle_b">
	<p>Angle C</p>
	<input type="text" name="angle_c">
	<p></p>
	<input type="submit" name="submit" value="Check">
</form>
<?php 
	} else {
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
?>