<?php 

function printInput($type, $name, $value, $placeholder, $class, $id = '') {
	$input_form = "<input type=\"$type\" name=\"$name\" value=\"$value\" class=\"$class\" id=\"$id\" placeholder=\"$placeholder\"/>";    
	return $input_form;
}
?>

<form action="" method="post">
	<?php 

	// first name
	echo printInput('text', 'first_name', '', 'First name here ...', 'form-control');
	//last name
	echo printInput('text', 'last_name', '', 'Last name here ...', 'form-control' );

	//submit button
	echo printInput('submit', 'submit', 'register', '', 'btn btn-default');
	?>
	
</form>